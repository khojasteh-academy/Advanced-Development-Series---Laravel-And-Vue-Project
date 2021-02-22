<?php

namespace Modules\Images\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administrators\Entities\Administrators;
use Modules\Core\Repositories\Criteria\Queries\EagerLoading;
use Modules\Core\Repositories\Criteria\Queries\SelectColumns;
use Modules\Core\Repositories\Criteria\Queries\WhereHas;
use Modules\Core\Repositories\Criteria\Queries\WhereIn;
use Modules\Core\Services\ResponseHelper;
use Modules\Core\Services\SlugServices;
use Modules\Images\Http\Requests\Panel\CreateImageRequest;
use Modules\Images\Http\Requests\Panel\DeepUsageCheckRequest;
use Modules\Images\Http\Requests\Panel\DeletePhyscalImageRequest;
use Modules\Images\Repositories\Contracts\ImageContract;
use Modules\Images\Traits\CreateImageTrait;
use Modules\Images\Traits\LoadFileManagerTrait;
use Modules\Images\Traits\MediaActionsTrait;
use Modules\Images\Transformers\Panel\PhysicalFileResource;
use Modules\Images\Transformers\Panel\PostImageResourceV1;
use Modules\Images\Transformers\Panel\PostImageResourceV2;
use Modules\Images\Transformers\Panel\UsageResource;
use Modules\Posts\Repositories\Contracts\MetaContract;
use Modules\Posts\Repositories\Contracts\PostContract;
use Modules\Terms\Repositories\Contracts\RelationContract;
use Modules\Terms\Repositories\Contracts\TaxonomyContract;
use Modules\Terms\Repositories\Contracts\TermContract;
use Config;

class ImagesController extends Controller
{
    use LoadFileManagerTrait;

    use MediaActionsTrait;

    use CreateImageTrait;


    private $slugServices;
    private $response;
    private $postRepository;
    private $termRepository;
    private $taxonomyRepository;
    private $relationRepository;
    private $metaRepository;
    private $imageRepository;

    /**
     * ImagesController constructor.
     * @param $postRepository
     * @param $termRepository
     * @param $taxonomyRepository
     * @param $relationRepository
     * @param $metaRepository
     * @param $imageRepository
     */
    public function __construct(PostContract $postRepository,
                                TermContract $termRepository,
                                TaxonomyContract $taxonomyRepository,
                                RelationContract $relationRepository,
                                MetaContract $metaRepository,
                                ImageContract $imageRepository)
    {
        Config::set('jwt.user', Administrators::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  Administrators::class,
        ]]);
        $this->postRepository = $postRepository;
        $this->termRepository = $termRepository;
        $this->taxonomyRepository = $taxonomyRepository;
        $this->relationRepository = $relationRepository;
        $this->metaRepository = $metaRepository;
        $this->imageRepository = $imageRepository;
        $this->slugServices = new SlugServices();
        $this->response = new ResponseHelper();
    }

    public function index()
    {
        $dbImages = $this->imageRepository->withCriteria([
            new SelectColumns(['post_body','id']),
            new WhereIn('post_type',['_blog_gallery','_blog_featured']),
            new WhereHas('imagePrimaryName', null)
        ])->all();
        return $this->response->successWithData(PostImageResourceV1::collection($dbImages));
    }

    public function physicalImages()
    {
        $physicalFiles = $this->imageRepository->getPhysicalImages(true,'images',true);
        return $this->response->successWithData([
            'Total Size'    =>  $physicalFiles['sizes'],
            'Total Files'   =>  $physicalFiles['total'],
            'Files'     =>  PhysicalFileResource::collection($physicalFiles['files'])
        ]);
    }

    public function deepUsageCheck(DeepUsageCheckRequest $request)
    {
        $imgName = $request->imgName;
        $postUsages = $this->postRepository->searchItem(
            'post_body',    $imgName
        );
        $postUsages->transform(function ($post) use ($imgName){
            $post = (object) $post;
            $post->usageCount = substr_count($post->post_body, $imgName);
            return $post;
        });

        $metaIsages = $this->metaRepository->withCriteria([
            new EagerLoading(['post','featuredImages'])
        ])->searchItem('meta_data', $imgName);

        return $this->response->successWithData([
            'metaUsages'    =>  UsageResource::collection($metaIsages),
            'postUsages'    =>  UsageResource::collection($postUsages),
            'metaUsagesCount'    =>  count($metaIsages),
            'postUsagesCount'    =>  count($postUsages),
        ]);

    }

    public function deletePhysicalImages(DeletePhyscalImageRequest $request)
    {
        $this->imageRepository->deletePhysicalImage($request->imgURL);

        return $this->response->success();
    }

    public function store(CreateImageRequest $request)
    {
        switch ($request->requestType) {
            case 'UpdatePostGallery':
                $type = '_blog_gallery';
                break;
            case 'UpdatePostFeatured':
                $type = '_blog_featured';
                break;
        }

        $img = $this->createSingleImage(
            $request->imageDetail['alternate'],
            $request->postCode,
            $type,
            $request->imageDetail['resultURL'],
            $request->imageResizeData['allowWidth'],
            $request->imageResizeData['imgWidth'],
            $request->imageResizeData['allowHeight'],
            $request->imageResizeData['imgHeight'],
            $request->imageDetail['description'],
            true
        );

        return $this->response->successWithData($img);
    }

}

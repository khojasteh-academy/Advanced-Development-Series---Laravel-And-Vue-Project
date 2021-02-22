<?php

namespace Modules\Posts\Http\Controllers\Panel;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administrators\Entities\Administrators;
use Modules\Comments\Repositories\Contracts\CommentContract;
use Modules\Core\Repositories\Criteria\Queries\Latest;
use Modules\Core\Repositories\Criteria\Queries\WhereDoesntHave;
use Modules\Core\Services\ResponseHelper;
use Modules\Core\Services\SlugServices;
use Modules\Images\Repositories\Contracts\ImageContract;
use Modules\Images\Traits\CreateImageTrait;
use Modules\Links\Repositories\Contracts\LinkContract;
use Modules\Posts\Entities\Posts;
use Modules\Posts\Repositories\Contracts\MetaContract;
use Modules\Posts\Repositories\Contracts\PostContract;
use Modules\Posts\Repositories\Criterias\PostTypeCriteria;
use Modules\Posts\Traits\CreatePostTrait;
use Modules\Posts\Traits\DeletePostTrait;
use Modules\Posts\Traits\UpdatePostTrait;
use Modules\Posts\Transformers\Panel\PostResource;
use Modules\Posts\Transformers\Panel\SinglePostResource;
use Modules\Terms\Repositories\Contracts\RelationContract;
use Modules\Terms\Repositories\Contracts\TaxonomyContract;
use Modules\Terms\Repositories\Contracts\TermContract;
use Config;
use Modules\Terms\Repositories\Criterias\CategoriesCriteria;
use Modules\Terms\Traits\Panel\CreateTagTrait;
use Modules\Terms\Transformers\Panel\CategoryResource;

class PostsController extends Controller
{
    // Traits
    use CreatePostTrait;
    use CreateImageTrait;
    use CreateTagTrait;

    use UpdatePostTrait;

    use DeletePostTrait;


    private $response;
    private $postRepository;
    private $termRepository;
    private $linkRepository;
    private $relationRepository;
    private $taxonomyRepository;
    private $metaRepository;
    private $imageRepository;
    private $commentRepository;
    private $slugServices;

    /**
     * PostsController constructor.
     * @param $postRepository
     * @param $termRepository
     * @param $linkRepository
     * @param $relationRepository
     * @param $taxonomyRepository
     * @param $metaRepository
     * @param $imageRepository
     * @param $commentRepository
     */
    public function __construct(PostContract $postRepository,
                                TermContract $termRepository,
                                LinkContract $linkRepository,
                                RelationContract $relationRepository,
                                TaxonomyContract $taxonomyRepository,
                                MetaContract $metaRepository,
                                ImageContract $imageRepository,
                                CommentContract $commentRepository)
    {
        Config::set('jwt.user', Administrators::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  Administrators::class,
        ]]);

        $this->postRepository = $postRepository;
        $this->termRepository = $termRepository;
        $this->linkRepository = $linkRepository;
        $this->relationRepository = $relationRepository;
        $this->taxonomyRepository = $taxonomyRepository;
        $this->metaRepository = $metaRepository;
        $this->imageRepository = $imageRepository;
        $this->commentRepository = $commentRepository;
        $this->response = new ResponseHelper();
        $this->slugServices = new SlugServices();
    }

    public function index()
    {

        $data = $this->postRepository->withCriteria([
            new Latest(),
            new PostTypeCriteria()
        ])->all();

        return PostResource::collection($data);

    }

    public function show(Posts $post)
    {
        $pst = $post->id;

        $callback = function ($query) use ($pst){
            $query->where('blog_post_id', $pst);
        };

        $data = $this->taxonomyRepository->withCriteria([
            new CategoriesCriteria(),
            new Latest(),
            new WhereDoesntHave('relations', $callback)
        ])->all();

        // TODO Add relation to database.

        return $this->response->successWithData([
            'postDetail'    =>  new SinglePostResource($post),
            'unusedCategories'  =>  CategoryResource::collection($data)
        ]);

    }

    public function store(Request $request)
    {
        $post = $this->createSinglePost($request);

        return $this->response->successWithData($post);
    }

    public function destroy($post)
    {
        $this->deletePost($post);

        return $this->response->success();
    }






}

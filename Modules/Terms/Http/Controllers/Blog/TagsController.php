<?php

namespace Modules\Terms\Http\Controllers\Blog;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Core\Services\ResponseHelper;
use Modules\Logs\Repositories\Contracts\ContentLogContract;
use Modules\Posts\Repositories\Contracts\PostContract;
use Modules\Terms\Repositories\Contracts\TaxonomyContract;
use Modules\Terms\Repositories\Contracts\TermContract;
use Modules\Terms\Repositories\Criterias\TagsCriteria;
use Modules\Terms\Traits\Blog\ShowTagsCategoriesTrait;
use Modules\Terms\Transformers\Blog\TagResource;

class TagsController extends Controller
{
    use ShowTagsCategoriesTrait;

    private $response;
    private $taxonomyRepository;
    private $termRepository;
    private $postRepository;
    private $contentLogRepository;

    /**
     * CategoriesController constructor.
     * @param $taxonomyRepository
     * @param $termRepository
     * @param $postRepository
     * @param $contentLogRepository
     */
    public function __construct(TaxonomyContract $taxonomyRepository,
                                TermContract $termRepository,
                                PostContract $postRepository,
                                ContentLogContract $contentLogRepository)
    {
        $this->taxonomyRepository = $taxonomyRepository;
        $this->termRepository = $termRepository;
        $this->postRepository = $postRepository;
        $this->contentLogRepository = $contentLogRepository;
        $this->response = new ResponseHelper();
    }

    public function index()
    {
        $data = $this->taxonomyRepository->withCriteria([
            new TagsCriteria(),
        ])->all();

        $this->contentLogRepository->createItem([
            'type'  =>  'tagsView',
            'ip'    =>  request()->ip(),
            'reference' =>  null
        ]);

        return $this->response->successWithData(TagResource::collection($data));
    }


}

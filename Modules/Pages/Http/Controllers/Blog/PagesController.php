<?php

namespace Modules\Pages\Http\Controllers\Blog;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Core\Services\ResponseHelper;
use Modules\Logs\Repositories\Contracts\ContentLogContract;
use Modules\Pages\Repositories\Contracts\PageContract;
use Modules\Pages\Transformers\Blog\LayoutResource;
use Modules\Pages\Transformers\Blog\PageResource;

class PagesController extends Controller
{
    private $response;
    private $pageRepository;
    private $contentLogRepository;

    /**
     * PagesController constructor.
     * @param $pageRepository
     * @param $contentLogRepository
     */
    public function __construct(PageContract $pageRepository,
                                ContentLogContract $contentLogRepository)
    {
        $this->pageRepository = $pageRepository;
        $this->contentLogRepository = $contentLogRepository;
        $this->response = new ResponseHelper();
    }

    public function index()
    {
        $data = $this->pageRepository->findWhere('status', 1);

        $this->contentLogRepository->createItem([
            'type'  =>  'pagesView',
            'ip'    =>  request()->ip(),
            'reference' =>  null
        ]);

        return $this->response->successWithData(PageResource::collection($data));
    }

    public function show($page)
    {
        $data = $this->pageRepository->whereFirst('slug', $page);
        return $this->response->successWithData(LayoutResource::collection($data->layouts));
    }


}

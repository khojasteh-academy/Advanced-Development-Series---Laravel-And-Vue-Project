<?php

namespace Modules\Pages\Http\Controllers\Panel;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administrators\Entities\Administrators;
use Modules\Core\Repositories\Criteria\Queries\Latest;
use Modules\Core\Services\ResponseHelper;
use Modules\Core\Services\SlugServices;
use Modules\Pages\Entities\Pages;
use Modules\Pages\Http\Requests\Panel\CreatePageRequest;
use Modules\Pages\Repositories\Contracts\PageContract;
use Config;
use Modules\Pages\Transformers\Panel\PageResource;
use Modules\Pages\Transformers\Panel\SinglePageResource;

class PagesController extends Controller
{
    private $response;
    private $slugServices;
    private $pageRepository;

    /**
     * PagesController constructor.
     * @param $pageRepository
     */
    public function __construct(PageContract $pageRepository)
    {
        Config::set('jwt.user', Administrators::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  Administrators::class,
        ]]);
        $this->pageRepository = $pageRepository;
        $this->slugServices = new SlugServices();
        $this->response = new ResponseHelper();
    }

    public function index()
    {
        $data = $this->pageRepository->withCriteria([
            new Latest()
        ])->all();

        return $this->response->successWithData(PageResource::collection($data));
    }

    public function show(Pages $page)
    {
        return $this->response->successWithData(new SinglePageResource($page));

    }

    public function store(CreatePageRequest $request)
    {
        $newSlug = $this->slugServices->createSlug('slug', $request->pageName, Pages::class);

        $page = $this->pageRepository->createItem([
            'name'  =>  $request->pageName,
            'slug'  =>  $newSlug,
            'status'    =>  $request->pageStatus
        ]);

        return $this->response->successWithData(new PageResource($page));
    }


}

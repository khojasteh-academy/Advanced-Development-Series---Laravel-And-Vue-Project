<?php

namespace Modules\Pages\Http\Controllers\Panel;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administrators\Entities\Administrators;
use Modules\Core\Services\ResponseHelper;
use Modules\Pages\Entities\PageLayouts;
use Modules\Pages\Http\Requests\Panel\CreateLayoutRequest;
use Modules\Pages\Repositories\Contracts\LayoutContract;
use Config;
use Modules\Pages\Transformers\Panel\LayoutResource;

class LayoutsController extends Controller
{
    private $response;
    private $layoutRepository;

    /**
     * LayoutsController constructor.
     * @param $layoutRepository
     */
    public function __construct(LayoutContract $layoutRepository)
    {
        Config::set('jwt.user', Administrators::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  Administrators::class,
        ]]);
        $this->layoutRepository = $layoutRepository;
        $this->response = new ResponseHelper();
    }

    public function store(CreateLayoutRequest $request)
    {
        $layout = $this->layoutRepository->createItem([
            'type'  =>  $request->pageType,
            'size'  =>  $request->pageSize,
            'parent_id'  =>  $request->itemParent,
            'page_id'  =>  $request->pageCode
        ]);
        return $this->response->successWithData(new LayoutResource($layout));
    }

    public function destroy(PageLayouts $layout)
    {
        $layout->delete();
        return $this->response->success();
    }


}

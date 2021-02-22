<?php

namespace Modules\Pages\Http\Controllers\Panel;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administrators\Entities\Administrators;
use Modules\Core\Services\ResponseHelper;
use Modules\Pages\Entities\PageComponents;
use Modules\Pages\Http\Requests\Panel\CreateComponentRequest;
use Modules\Pages\Repositories\Contracts\ComponentContract;
use Config;
use Modules\Pages\Transformers\Panel\ComponentResource;

class ComponentsController extends Controller
{

    private $response;
    private $componentRepository;

    /**
     * ComponentesController constructor.
     * @param $componentRepository
     */
    public function __construct(ComponentContract $componentRepository)
    {
        Config::set('jwt.user', Administrators::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  Administrators::class,
        ]]);
        $this->componentRepository = $componentRepository;
        $this->response = new ResponseHelper();
    }

    public function store(CreateComponentRequest $request)
    {

        $options = [
            'widgetName'    =>  $request->widgetName,
            'widgetData'    =>  $request->formData
        ];

        $component = $this->componentRepository->createItem([
            'type'  =>  $request->formType,
            'layout_id'  =>  $request->layoutCode,
            'options'  =>  serialize($options),
        ]);

        return $this->response->successWithData(new ComponentResource($component));

    }

    public function destroy(PageComponents $component)
    {
        $component->delete();
        return $this->response->success();
    }


}

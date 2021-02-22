<?php

namespace Modules\Footers\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administrators\Entities\Administrators;
use Modules\Core\Services\ResponseHelper;
use Modules\Footers\Entities\Footers;
use Modules\Footers\Http\Requests\Panel\CreateFooterRequest;
use Modules\Footers\Http\Requests\Panel\RemoveFooterRequest;
use Modules\Footers\Repositories\Contracts\ColumnContract;
use Modules\Footers\Repositories\Contracts\FooterContract;
use Modules\Footers\Repositories\Contracts\WidgetContract;
use Modules\Footers\Transformers\Panel\FooterColumnResource;
use Modules\Footers\Transformers\Panel\FooterResource;
use Config;
use Modules\Footers\Transformers\Panel\FooterWidgetResource;
use Modules\Footers\Transformers\Panel\SingleFooterResource;

class FootersController extends Controller{

    private $response;
    private $footerRepository;
    private $columnRepository;
    private $widgetRepository;

    /**
     * FootersController constructor.
     * @param $footerRepository
     * @param $columnRepository
     * @param $widgetRepository
     */
    public function __construct(FooterContract $footerRepository,
                                ColumnContract $columnRepository,
                                WidgetContract $widgetRepository)
    {
        Config::set('jwt.user', Administrators::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  Administrators::class,
        ]]);
        $this->footerRepository = $footerRepository;
        $this->columnRepository = $columnRepository;
        $this->widgetRepository = $widgetRepository;
        $this->response = new ResponseHelper();
    }

    public function index()
    {
        $footers = $this->footerRepository->all();
        return FooterResource::collection($footers);
    }

    public function show(Footers $footer)
    {
        return new SingleFooterResource($footer);
    }

    public function store(CreateFooterRequest $request)
    {
        $cols = $request->footerCols ? 4 : 3;
        switch ($request->requestType) {
            case 'createAppFooter':
                $footer = $this->footerRepository->createItem([
                    'name'  =>  $request->footerName,
                    'cols'  =>  $cols
                ]);
                $data = new FooterResource($footer);
                break;
            case 'createAppColumnFooter':
                $footer = $this->columnRepository->createItem([
                    'name'  =>  $request->columnName,
                    'order'  =>  $request->columnOrder,
                    'footer_id'  =>  $request->footerCode,
                ]);
                $data = new FooterColumnResource($footer);
                break;
            case 'createAppWidgetFooter':
                $footer = $this->widgetRepository->createItem([
                    'type'  =>  $request->widgetType,
                    'content_id'  =>  $request->contentCode,
                    'content_data'  =>  $request->widgetContent,
                    'column_id' =>  $request->columnCode,
                    'name'  =>  $request->widgetName
                ]);
                $data = new FooterWidgetResource($footer);
                break;
        }

        return $this->response->successWithData($data);
    }

    public function removeFooters(RemoveFooterRequest $request)
    {
        switch ($request->requestType) {
            case 'footerWidget':
                $this->widgetRepository->removeItem($request->widgetCode);
                break;
                // TODO Complete These Actions For CHALLENGE
        }
    }



}

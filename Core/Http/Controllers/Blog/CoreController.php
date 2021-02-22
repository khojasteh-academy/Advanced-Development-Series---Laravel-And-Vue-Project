<?php

namespace Modules\Core\Http\Controllers\Blog;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Core\Repositories\Core\Contracts\OptionContract;
use Modules\Core\Repositories\Criteria\Queries\WhereIn;
use Modules\Core\Services\ResponseHelper;
use Modules\Footers\Repositories\Contracts\FooterContract;
use Modules\Footers\Transformers\Blog\FooterColumnResource;
use Modules\Logs\Repositories\Contracts\ContentLogContract;
use Modules\Pages\Transformers\Blog\LayoutResource;

class CoreController extends Controller
{
    private $response;
    private $contentLogRepository;
    private $optionRepository;
    private $footerRepository;

    /**
     * CoreController constructor.
     * @param $contentLogRepository
     * @param $optionRepository
     * @param $footerRepository
     */
    public function __construct(ContentLogContract $contentLogRepository,
                                OptionContract $optionRepository,
                                FooterContract $footerRepository)
    {
        $this->contentLogRepository = $contentLogRepository;
        $this->optionRepository = $optionRepository;
        $this->footerRepository = $footerRepository;
        $this->response = new ResponseHelper();
    }

    public function defaultLayout()
    {
        $coreOptions = $this->optionRepository->withCriteria([
            new WhereIn('option_name', [
                '_default_header',
                '_default_footer',
                '_default_footer_copyright_text',
                '_user_signup_status',
                '_user_signin_status',
                '_user_auth_status'
            ])
        ])->all();
        $options = [];
        foreach ($coreOptions as $option) {
            $options[$option->option_name] = $option->option_data;
        }

        $footer = $this->footerRepository->findSingle($options['_default_footer']);


        return $this->response->successWithData([
            'FooterLayout'  =>  FooterColumnResource::collection($footer->footerColumns),
            'CopyRight' =>  $options['_default_footer_copyright_text'],
            'AuthStatus'    =>  [
                'SignUpStatus'  =>  !(bool)$options['_user_auth_status'] ? false : (bool)$options['_user_signup_status'],
                'SignInStatus'  =>  !(bool)$options['_user_auth_status'] ? false : (bool)$options['_user_signin_status'],
                'BaseStatus'  =>  (bool)$options['_user_auth_status'],
            ],
            'Header'    =>  $options['_default_header']
        ]);
    }

    public function loadHomePage()
    {
        $this->contentLogRepository->createItem([
            'type'  =>  'homeView',
            'ip'  =>  request()->ip(),
            'reference'  =>  null
        ]);
        $corePage = $this->optionRepository->whereFirst('option_name','_default_home_page')
            ->homePage->layouts;
        return $this->response->successWithData(LayoutResource::collection($corePage));

    }
}

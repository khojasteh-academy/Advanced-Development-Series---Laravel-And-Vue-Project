<?php

namespace Modules\Core\Http\Controllers\Panel;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administrators\Entities\Administrators;
use Modules\Core\Http\Requests\Panel\UpdateAuthSettingsRequest;
use Modules\Core\Http\Requests\Panel\UpdatePageSettingsRequest;
use Modules\Core\Http\Requests\Panel\UpdatePostSettingsRequest;
use Modules\Core\Repositories\Core\Contracts\OptionContract;
use Modules\Core\Services\ResponseHelper;
use Modules\Footers\Repositories\Contracts\FooterContract;
use Modules\Footers\Transformers\Panel\FooterResource;
use Modules\Pages\Repositories\Contracts\PageContract;
use Modules\Pages\Transformers\Panel\PageResource;
use Config;

class CoreController extends Controller
{

    private $optionRepository;
    private $footerRepository;
    private $pageRepository;
    private $response;

    /**
     * CoreController constructor.
     * @param $optionRepository
     * @param $footerRepository
     * @param $pageRepository
     */
    public function __construct(OptionContract $optionRepository,
                                FooterContract $footerRepository,
                                PageContract $pageRepository)
    {
        Config::set('jwt.user', Administrators::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  Administrators::class,
        ]]);
        $this->optionRepository = $optionRepository;
        $this->footerRepository = $footerRepository;
        $this->pageRepository = $pageRepository;
        $this->response = new ResponseHelper();
    }

    public function index()
    {
        $options = $this->optionRepository->all();
        $pages = $this->pageRepository->all();
        $footer = $this->footerRepository->all();
        $coreOption = [];
        foreach ($options as $option) {
            $coreOption[$option->option_name]   =   $option->option_data;
        }
        return $this->response->successWithData([
            'options'   =>  $coreOption,
            'pages'   =>  PageResource::collection($pages),
            'footers'   =>  FooterResource::collection($footer),
        ]);
    }

    public function updatePageSettings(UpdatePageSettingsRequest $request)
    {
        $this->optionRepository->whereFirst('option_name','_default_home_page')
            ->update([
                'option_data'   =>  $request->_default_home_page
            ]);
        $this->optionRepository->whereFirst('option_name','_default_header')
            ->update([
                'option_data'   =>  $request->_default_header
            ]);
        $this->optionRepository->whereFirst('option_name','_default_footer')
            ->update([
                'option_data'   =>  $request->_default_footer
            ]);
        $this->optionRepository->whereFirst('option_name','_default_footer_copyright_text')
            ->update([
                'option_data'   =>  $request->_default_footer_copyright_text
            ]);

        return $this->response->success();
    }

    public function updateAuthSettings(UpdateAuthSettingsRequest $request)
    {

        $this->optionRepository->whereFirst('option_name','_user_signup_status')
            ->update([
                'option_data'   =>  $request->UserSignUpStatus
            ]);
        $this->optionRepository->whereFirst('option_name','_user_signin_status')
            ->update([
                'option_data'   =>  $request->UserSignInStatus
            ]);
        $this->optionRepository->whereFirst('option_name','_user_auth_status')
            ->update([
                'option_data'   =>  $request->UserAuthStatus
            ]);
        $this->optionRepository->whereFirst('option_name','_activate_user_after_signup')
            ->update([
                'option_data'   =>  $request->ActiveUserAfterSignUp
            ]);

        return $this->response->success();
    }

    public function updatePostSettings(UpdatePostSettingsRequest $request)
    {
        $this->optionRepository->whereFirst('option_name','_default_create_post_status')
            ->update([
                'option_data'   =>  $request->DefaultCreatePostStatus
            ]);

        return $this->response->success();
    }


}

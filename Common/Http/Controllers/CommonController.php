<?php

namespace Modules\Common\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administrators\Entities\Administrators;
use Modules\Administrators\Repositories\Contracts\AdministratorContract;
use Modules\Administrators\Traits\DeleteAdministratorTrait;
use Modules\Comments\Repositories\Contracts\CommentContract;
use Modules\Comments\Traits\DeleteCommentTrait;
use Modules\Common\Traits\DeleteMultipleCommonTrait;
use Modules\Core\Services\ResponseHelper;
use Modules\Links\Repositories\Contracts\LinkContract;
use Modules\Posts\Repositories\Contracts\MetaContract;
use Modules\Posts\Repositories\Contracts\PostContract;
use Modules\Posts\Traits\DeletePostTrait;
use Modules\Terms\Repositories\Contracts\RelationContract;
use Modules\Terms\Repositories\Contracts\TaxonomyContract;
use Modules\Terms\Traits\Panel\DeleteTermsTrait;
use Modules\Users\Repositories\Contracts\UserContract;
use Modules\Users\Traits\DeleteUserTrait;
use Config;

class CommonController extends Controller
{
    // Delete Multiple Traits
    use DeleteMultipleCommonTrait;
    use DeleteUserTrait;
    use DeleteTermsTrait;
    use DeleteCommentTrait;
    use DeletePostTrait;
    use DeleteAdministratorTrait;

    private $commentRepository;
    private $postRepository;
    private $linkRepository;
    private $userRepository;
    private $metaRepository;
    private $adminRepository;
    private $taxonomyRepository;
    private $relationRepository;
    private $response;

    /**
     * CommonController constructor.
     * @param $commentRepository
     * @param $postRepository
     * @param $linkRepository
     * @param $userRepository
     * @param $metaRepository
     * @param $adminRepository
     * @param $taxonomyRepository
     * @param $relationRepository
     */
    public function __construct(
        CommentContract $commentRepository,
        PostContract $postRepository,
        LinkContract $linkRepository,
        UserContract $userRepository,
        MetaContract $metaRepository,
        AdministratorContract $adminRepository,
        TaxonomyContract $taxonomyRepository,
        RelationContract $relationRepository)
    {
        Config::set('jwt.user', Administrators::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  Administrators::class,
        ]]);
        $this->commentRepository = $commentRepository;
        $this->postRepository = $postRepository;
        $this->linkRepository = $linkRepository;
        $this->userRepository = $userRepository;
        $this->metaRepository = $metaRepository;
        $this->adminRepository = $adminRepository;
        $this->taxonomyRepository = $taxonomyRepository;
        $this->relationRepository = $relationRepository;
        $this->response = new ResponseHelper();
    }


}

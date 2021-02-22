<?php

namespace Modules\Analytics\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administrators\Entities\Administrators;
use Modules\Analytics\Repositories\Contracts\AnalyticContract;
use Modules\Comments\Repositories\Contracts\CommentContract;
use Modules\Comments\Repositories\Criterias\NonAdminComments;
use Modules\Core\Services\ResponseHelper;
use Modules\Logs\Entities\ContentLogs;
use Modules\Logs\Repositories\Contracts\ContentLogContract;
use Modules\Posts\Repositories\Contracts\PostContract;
use Modules\Posts\Repositories\Criterias\PostTypeCriteria;
use Modules\Terms\Repositories\Contracts\TaxonomyContract;
use Modules\Terms\Repositories\Criterias\CategoriesCriteria;
use Modules\Users\Repositories\Contracts\UserContract;
use Config;

class AnalyticsController extends Controller
{
    private $contentLogRepository;
    private $postRepository;
    private $taxonomyRepository;
    private $commentRepository;
    private $userRepository;
    private $analyticRepositor;
    private $response;

    /**
     * AnalyticsController constructor.
     * @param $contentLogRepository
     * @param $postRepository
     * @param $taxonomyRepository
     * @param $commentRepository
     * @param $userRepository
     * @param $analyticRepositor
     */
    public function __construct(
        ContentLogContract $contentLogRepository,
        PostContract $postRepository,
        TaxonomyContract $taxonomyRepository,
        CommentContract $commentRepository,
        UserContract $userRepository,
        AnalyticContract $analyticRepositor)
    {
        Config::set('jwt.user', Administrators::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  Administrators::class,
        ]]);
        $this->contentLogRepository = $contentLogRepository;
        $this->postRepository = $postRepository;
        $this->taxonomyRepository = $taxonomyRepository;
        $this->commentRepository = $commentRepository;
        $this->userRepository = $userRepository;
        $this->analyticRepositor = $analyticRepositor;
        $this->response = new ResponseHelper();
    }

    public function dashboardStats(ContentLogs $logs)
    {
        $users = $this->userRepository->allCount();

        $categories = $this->taxonomyRepository->withCriteria([
            new CategoriesCriteria()
        ])->allCount();

        $comments = $this->commentRepository->withCriteria([
            new NonAdminComments()
        ])->allCount();

        $posts = $this->postRepository->withCriteria([
            new PostTypeCriteria()
        ])->allCount();

        $views = $this->contentLogRepository->allCount();

        return $this->response->successWithData([
            'userStat'  =>  $users,
            'categoriesStat'    =>  $categories,
            'commentsStat'  =>  $comments,
            'postsStat' =>  $posts,
            'viewsStat' =>  $views,
            'latestViewStat'    =>  $this->analyticRepositor->getLatestViewStatByNumberOfDays(20),
            'totalViewDaysOfWeek'   =>  $this->analyticRepositor->getViewStatByDaysOfWeek($logs),
            'totalContentViewDaysOfWeek'    =>  $this->analyticRepositor->getContentsViewStatByDaysOfWeek($logs)
        ]);

    }


}

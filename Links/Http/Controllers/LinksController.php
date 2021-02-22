<?php

namespace Modules\Links\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administrators\Entities\Administrators;
use Modules\Core\Repositories\Criteria\Queries\EagerLoading;
use Modules\Core\Repositories\Criteria\Queries\Latest;
use Modules\Core\Services\ResponseHelper;
use Modules\Core\Services\SlugServices;
use Modules\Links\Entities\Links;
use Modules\Links\Http\Requests\Panel\UpdateLinkRequest;
use Modules\Links\Repositories\Contracts\LinkContract;
use Modules\Links\Traits\CreateLinkTrait;
use Modules\Links\Transformers\Panel\ContentLinkResource;
use Modules\Links\Transformers\Panel\LinkResource;
use Modules\Links\Transformers\Panel\UrlLinkResource;
use Modules\Posts\Entities\Posts;
use Modules\Posts\Repositories\Contracts\MetaContract;
use Modules\Posts\Repositories\Contracts\PostContract;
use Modules\Posts\Repositories\Criterias\LinkTypeCriteria;
use Modules\Posts\Repositories\Criterias\PostTypeCriteria;
use Config;

class LinksController extends Controller
{
    use CreateLinkTrait;

    private $slugServices;
    private $response;
    private $linkRepository;
    private $postRepository;
    private $metaRepository;

    /**
     * LinksController constructor.
     * @param $linkRepository
     * @param $postRepository
     * @param $metaRepository
     */
    public function __construct(LinkContract $linkRepository,
                                PostContract $postRepository,
                                MetaContract $metaRepository)
    {
        Config::set('jwt.user', Administrators::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  Administrators::class,
        ]]);
        $this->linkRepository = $linkRepository;
        $this->postRepository = $postRepository;
        $this->metaRepository = $metaRepository;
        $this->slugServices = new SlugServices();
        $this->response = new ResponseHelper();
    }

    public function index()
    {
        $data = $this->postRepository->withCriteria([
            new LinkTypeCriteria(),
            new EagerLoading('childrenLinks'),
            new Latest()
        ])->all();

        return LinkResource::collection($data);
    }


    public function show(Posts $link)
    {
        $bPost = $this->postRepository->withCriteria([
            new PostTypeCriteria(),
            new Latest()
        ])->all();

        $uLinks = $this->linkRepository->withCriteria([
            new Latest()
        ])->all();

        return $this->response->successWithData([
            'parentLinks'   =>  UrlLinkResource::collection($link->childrenLinks),
            'postLinks' =>  ContentLinkResource::collection($bPost),
            'metaLinks' =>  ContentLinkResource::collection($uLinks)
        ]);
    }

    public function update(UpdateLinkRequest $request, $link)
    {
        $linkFormat = $request->linkFormat ? 'aggregate' : 'nav';

        $this->postRepository->updateItem($link,[
            'post_title'    =>  $request->linkName,
            'post_format'    =>  $linkFormat,
            'post_body'    =>  $request->linkBody,
            'post_short_desc'    =>  $request->linkShortDesc,
        ]);

        $this->metaRepository->whereUpdate('blog_post_id', $link, [
            'meta_data' =>  $request->linkIcon ? $request->linkIconName : null
        ]);

        return $this->response->success();
    }

    public function destroy(Links $link)
    {
        $link->delete();
        return $this->response->success();
    }


}

<?php

namespace Modules\Posts\Http\Controllers\Blog;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\Core\Repositories\Criteria\Queries\EagerLoading;
use Modules\Core\Repositories\Criteria\Queries\WhereHas;
use Modules\Core\Services\ResponseHelper;
use Modules\Logs\Repositories\Contracts\ContentLogContract;
use Modules\Posts\Http\Requests\Blog\CheckPostPasswordRequest;
use Modules\Posts\Http\Requests\Blog\FavoritePostRequest;
use Modules\Posts\Repositories\Contracts\MetaContract;
use Modules\Posts\Repositories\Contracts\PostContract;
use Modules\Posts\Repositories\Criterias\PostTypeCriteria;
use Modules\Posts\Transformers\Blog\PostResource;
use Modules\Posts\Transformers\Blog\SinglePostResource;

class  PostsController extends Controller
{

    private $response;
    private $logRepository;
    private $postRepository;
    private $metaRepository;

    /**
     * PostsController constructor.
     * @param $logRepository
     * @param $postRepository
     * @param $metaRepository
     */
    public function __construct(ContentLogContract $logRepository,
                                PostContract $postRepository,
                                MetaContract $metaRepository)
    {
        $this->logRepository = $logRepository;
        $this->postRepository = $postRepository;
        $this->metaRepository = $metaRepository;
        $this->response = new ResponseHelper();
    }

    public function index()
    {

        $this->logRepository->createItem([
            'type'  =>  'postView',
            'ip'    =>  request()->ip(),
            'reference' =>  null
        ]);

        $posts = $this->postRepository->withCriteria([
            new PostTypeCriteria(),
            new EagerLoading('metas')
        ])->all();

        return $this->response->successWithData([
            'posts' =>  PostResource::collection($posts)
        ]);


    }

    public function show($post)
    {
        $callback = function ($query) use ($post){
            $query->where('meta_data', $post);
        };

        $pst = $this->postRepository->whereHasFirst('slug', $callback);

        $this->logRepository->createItem([
            'type'  =>  'postDetailView',
            'ip'    =>  request()->ip(),
            'reference' =>  $pst->id
        ]);

        $pst->update([
            'views' =>  ++$pst->views
        ]);

        if ($pst->accessibility->meta_data == 'password') {

            return $this->response->successWithData([
                'accessibility'  => 'ProtectedPost',
                'postCode'  =>  $pst->id
            ]);

        } elseif ($pst->accessibility->meta_data == 'private') {

            return $this->response->successWithData([
                'accessibility'  => 'PrivatePost'
            ]);

        } else {
            return $this->response->successWithData([
                'accessibility'  => 'PublicPost',
                'post'  =>  new SinglePostResource($pst)
            ]);
        }

    }

    protected function checkPostPassword(CheckPostPasswordRequest $request)
    {
        $post = $this->postRepository->findSingle($request->postCode);

        if (Hash::check($request->postPassword, $post->password->meta_data)) {
            return $this->response->successWithData([
                'post'  =>  new SinglePostResource($post)
            ]);
        }
        return $this->response->failed();
    }

    public function favorites(FavoritePostRequest $request)
    {
        $newSlugs = [];

        $this->logRepository->createItem([
            'type'  =>  'favoriteView',
            'ip'    =>  request()->ip(),
            'reference' => null
        ]);

        $callback = function ($query) use ($newSlugs){
            $query->whereIn('meta_data', $newSlugs);
        };

        $pst = $this->postRepository->withCriteria([
            new WhereHas('slug', $callback)
        ])->all();

        return $this->response->successWithData([
            'posts' =>  PostResource::collection($pst),
            'slugs' =>  $newSlugs
        ]);

    }

    public function search($name)
    {
        $posts = $this->postRepository->findWhereArray([
            ['post_type', '_blog_post'],
            ['post_title', 'like', '%'.$name.'%']
        ]);

        return $this->response->successWithData([
            'posts' =>  PostResource::collection($posts)
        ]);
    }


}

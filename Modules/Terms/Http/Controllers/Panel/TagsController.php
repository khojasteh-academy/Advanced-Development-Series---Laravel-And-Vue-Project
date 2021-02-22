<?php

namespace Modules\Terms\Http\Controllers\Panel;

use Config;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administrators\Entities\Administrators;
use Modules\Core\Services\ResponseHelper;
use Modules\Core\Services\SlugServices;
use Modules\Terms\Http\Requests\Panel\CreateTagRequest;
use Modules\Terms\Repositories\Contracts\RelationContract;
use Modules\Terms\Repositories\Contracts\TaxonomyContract;
use Modules\Terms\Repositories\Contracts\TermContract;
use Modules\Terms\Traits\Panel\CreateTagTrait;
use Modules\Terms\Transformers\Panel\TagResource;

class TagsController extends Controller{

    use CreateTagTrait;

    private $slugServices;
    private $response;
    private $relationRepository;
    private $taxonomyRepository;
    private $termRepository;

    /**
     * TagsController constructor.
     * @param $relationRepository
     * @param $taxonomyRepository
     * @param $termRepository
     */
    public function __construct(RelationContract $relationRepository,
                                TaxonomyContract $taxonomyRepository,
                                TermContract $termRepository)
    {
        Config::set('jwt.user', Administrators::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  Administrators::class,
        ]]);

        $this->relationRepository = $relationRepository;
        $this->taxonomyRepository = $taxonomyRepository;
        $this->termRepository = $termRepository;
        $this->slugServices = new SlugServices();
        $this->response = new ResponseHelper();
    }

    public function store(CreateTagRequest $request)
    {
        $tag = $this->createSingleTag($request->tagName, $request->postCode);
        if ($tag['operation'] == 'Create') {
            $reponse = $this->response->successWithData(new TagResource($tag['tag']));
        } else {
            $reponse = $this->response->successWithData('TagExist');
        }

        return $reponse;

    }

    public function destroy($tag)
    {
        $this->relationRepository->removeItem($tag);
        return $this->response->success();
    }


}

<?php

namespace Modules\Terms\Http\Controllers\Panel;

use Config;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administrators\Entities\Administrators;
use Modules\Core\Repositories\Criteria\Queries\Latest;
use Modules\Core\Services\ResponseHelper;
use Modules\Core\Services\SlugServices;
use Modules\Posts\Repositories\Contracts\MetaContract;
use Modules\Terms\Entities\Terms;
use Modules\Terms\Http\Requests\Panel\ExceptThisCategoryRequest;
use Modules\Terms\Repositories\Contracts\RelationContract;
use Modules\Terms\Repositories\Contracts\TaxonomyContract;
use Modules\Terms\Repositories\Contracts\TermContract;
use Modules\Terms\Repositories\Criterias\CategoriesCriteria;
use Modules\Terms\Repositories\Criterias\ExceptThisCategoryCriteria;
use Modules\Terms\Repositories\Criterias\OnlyParentCategoriesCriteria;
use Modules\Terms\Traits\Panel\CreateCategoriesTrait;
use Modules\Terms\Traits\Panel\DeleteTermsTrait;
use Modules\Terms\Traits\Panel\UpdateCategoriesTrait;
use Modules\Terms\Transformers\Panel\CategoryResource;
use Modules\Terms\Transformers\Panel\ParentCategoryResource;

class CategoriesController extends Controller
{
    use CreateCategoriesTrait;

    use UpdateCategoriesTrait;

    use DeleteTermsTrait;


    private $response;
    private $termRepository;
    private $relationRepository;
    private $taxonomyRepository;
    private $metaRepository;
    private $slugServices;

    /**
     * CategoriesController constructor.
     * @param $termRepository
     * @param $relationRepository
     * @param $taxonomyRepository
     * @param $metaRepository
     * @param $categoryRepository
     */
    public function __construct(TermContract $termRepository,
                                RelationContract $relationRepository,
                                TaxonomyContract $taxonomyRepository,
                                MetaContract $metaRepository)
    {
        Config::set('jwt.user', Administrators::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  Administrators::class,
        ]]);
        $this->termRepository = $termRepository;
        $this->relationRepository = $relationRepository;
        $this->taxonomyRepository = $taxonomyRepository;
        $this->metaRepository = $metaRepository;
        $this->response = new ResponseHelper();
        $this->slugServices = new SlugServices();
    }

    public function index()
    {

        $data = $this->taxonomyRepository->withCriteria([
            new CategoriesCriteria(),
            new Latest()
        ])->all();

        return $this->response->successWithData(CategoryResource::collection($data));

    }

    public function parentCategories()
    {
        $data = $this->taxonomyRepository->withCriteria([
            new OnlyParentCategoriesCriteria(),
            new Latest()
        ])->all();

        return $this->response->successWithData(CategoryResource::collection($data));
    }

    public function exceptThisCategory(ExceptThisCategoryRequest $request)
    {
        $cat = $this->taxonomyRepository->findSingle($request->categoryCode);
        $data = $this->taxonomyRepository->withCriteria([
            new ExceptThisCategoryCriteria($request->categoryCode, $cat->parent),
            new Latest()
        ])->all();

        return $this->response->successWithData([
            'categories'    =>  ParentCategoryResource::collection($data),
            'categoriesCount'   =>  count($data)
        ]);
    }

    public function checkSlugAndCreate($slug, $name)
    {
        return $this->slugServices->createSlug('slug',!empty($slug) ? $slug : $name, Terms::class);
    }

    public function destroy($category)
    {
        $this->deleteTaxonomy($category);
        return $this->response->success();
    }


}

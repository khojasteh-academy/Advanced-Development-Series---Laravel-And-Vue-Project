<?php


namespace Modules\Terms\Repositories\Criterias;


use Modules\Core\Repositories\Criteria\CriterionContract;

class SubCategoriesCriteria implements CriterionContract
{

    public function apply($entity)
    {
        return $entity->with('subCategories');
    }

}

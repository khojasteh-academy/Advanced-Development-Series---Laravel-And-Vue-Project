<?php


namespace Modules\Terms\Repositories\Criterias;


use Modules\Core\Repositories\Criteria\CriterionContract;

class OnlyParentCategoriesCriteria implements CriterionContract
{

    public function apply($entity)
    {
        return $entity->where([
            ['taxonomy_type', 'blog_category'],
            ['parent', 0]
        ]);
    }

}

<?php


namespace Modules\Terms\Repositories\Criterias;


use Modules\Core\Repositories\Criteria\CriterionContract;

class TagsCriteria implements CriterionContract
{

    public function apply($entity)
    {
        return $entity->where('taxonomy_type', 'blog_category');
    }

}

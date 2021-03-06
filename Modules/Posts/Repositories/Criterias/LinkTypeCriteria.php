<?php


namespace Modules\Posts\Repositories\Criterias;


use Modules\Core\Repositories\Criteria\CriterionContract;

class LinkTypeCriteria implements CriterionContract
{

    public function apply($entity)
    {
        return $entity->where('post_type', '_blog_links');
    }
}

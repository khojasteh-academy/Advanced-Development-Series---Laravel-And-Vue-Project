<?php


namespace Modules\Core\Repositories\Criteria\Queries;


use Modules\Core\Repositories\Criteria\CriterionContract;

class Latest implements CriterionContract
{
    public function apply($entity)
    {
        return $entity->latest();
    }
}

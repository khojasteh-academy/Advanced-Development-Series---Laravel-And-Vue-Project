<?php


namespace Modules\Core\Repositories\Criteria\Queries;


use Modules\Core\Repositories\Criteria\CriterionContract;

class SelectColumns implements CriterionContract
{
    protected $columns;

    /**
     * Limits constructor.
     * @param $limits
     */
    public function __construct($columns)
    {
        $this->columns = $columns;
    }


    public function apply($entity)
    {
        return $entity->select($this->columns);
    }
}

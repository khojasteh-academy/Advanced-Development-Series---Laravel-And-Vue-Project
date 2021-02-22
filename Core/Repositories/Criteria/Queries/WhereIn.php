<?php


namespace Modules\Core\Repositories\Criteria\Queries;


use Modules\Core\Repositories\Criteria\CriterionContract;

class WhereIn implements CriterionContract
{
    protected $column;
    protected $items;

    /**
     * Limits constructor.
     * @param $limits
     */
    public function __construct($column, $items)
    {
        $this->column = $column;
        $this->items = $items;
    }


    public function apply($entity)
    {
        return $entity->whereIn($this->column, $this->items);
    }
}

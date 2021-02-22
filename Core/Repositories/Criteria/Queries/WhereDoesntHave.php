<?php


namespace Modules\Core\Repositories\Criteria\Queries;


use Modules\Core\Repositories\Criteria\CriterionContract;

class WhereDoesntHave implements CriterionContract
{
    protected $relationship;
    protected $callback;

    /**
     * Limits constructor.
     * @param $limits
     */
    public function __construct($relationship, $callback)
    {
        $this->relationship = $relationship;
        $this->callback = $callback;
    }


    public function apply($entity)
    {
        return $entity->whereDoesntHave($this->relationship, $this->callback);
    }
}

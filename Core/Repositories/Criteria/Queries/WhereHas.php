<?php


namespace Modules\Core\Repositories\Criteria\Queries;


use Modules\Core\Repositories\Criteria\CriterionContract;

class WhereHas implements CriterionContract
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
        if ($this->callback != null) {
            return $entity->whereHas($this->relationship, $this->callback);
        }
        return $entity->whereHas($this->relationship);
    }
}

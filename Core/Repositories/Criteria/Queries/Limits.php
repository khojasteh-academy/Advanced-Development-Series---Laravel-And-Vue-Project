<?php


namespace Modules\Core\Repositories\Criteria\Queries;


use Modules\Core\Repositories\Criteria\CriterionContract;

class Limits implements CriterionContract
{
    protected $limits;

    /**
     * Limits constructor.
     * @param $limits
     */
    public function __construct($limits)
    {
        $this->limits = $limits;
    }


    public function apply($entity)
    {
        return $entity->take($this->limits);
    }
}

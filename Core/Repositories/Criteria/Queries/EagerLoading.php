<?php


namespace Modules\Core\Repositories\Criteria\Queries;


use Modules\Core\Repositories\Criteria\CriterionContract;

class EagerLoading implements CriterionContract
{
    protected $relationship;

    /**
     * EagerLoading constructor.
     * @param $relationship
     */
    public function __construct($relationship)
    {
        $this->relationship = $relationship;
    }


    public function apply($entity)
    {
        return $entity->with($this->relationship);
    }
}

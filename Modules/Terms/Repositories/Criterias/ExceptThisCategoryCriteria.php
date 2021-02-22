<?php


namespace Modules\Terms\Repositories\Criterias;


use Modules\Core\Repositories\Criteria\CriterionContract;

class ExceptThisCategoryCriteria implements CriterionContract
{
    protected $item;
    protected $parent;

    /**
     * ExpectThisCategoryCriteria constructor.
     * @param $item
     * @param $parent
     */
    public function __construct($item, $parent)
    {
        $this->item = $item;
        $this->parent = $parent;
    }

    public function apply($entity)
    {
        $operator = $this->parent ? '!=' : '==';
        return $entity->where([
            ['taxonomy_type', 'blog_category'],
            ['id', '!=', $this->item],
            ['parent', $operator, $this->parent],
            ['parent', 0],
        ]);
    }


}

<?php


namespace Modules\Core\Repositories\Base;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Arr;
use Modules\Core\Repositories\Criteria\CriteriaContract;

abstract class BaseRepository implements BaseContract, CriteriaContract
{
    protected $entity;

    /**
     * BaseRepository constructor.
     */
    public function __construct()
    {
        $this->entity = $this->getEntityClass();
    }

    public function all()
    {
        return $this->entity->get();
    }

    public function allCount()
    {
        return $this->entity->count();
    }

    public function whereCount(array $items)
    {
        return $this->entity->where($items)->count();
    }

    public function findSingle($id)
    {
        return $this->entity->findOrFail($id);
    }

    public function whereFirst($column, $value)
    {
        return $this->entity->where($column, $value)->firstOrFail();
    }

    public function whereFirstArray($array)
    {
        return $this->entity->where($array)->firstOrFail();
    }

    public function searchItem($column, $value)
    {
        return $this->entity->where($column, 'like', '%'.$value.'%')->get();
    }

    public function findWhere($column, $value)
    {
        return $this->entity->where($column, $value)->get();
    }

    public function whereHasFirst($relation, $callback)
    {
        return $this->entity->whereHas($relation, $callback)->first();
    }

    public function findWhereArray(array $array)
    {
        return $this->entity->where($array)->get();
    }

    public function removeItem($item)
    {
        $data = $this->findSingle($item);
        return $data->delete();
    }

    public function createItem(array $items)
    {
        return $this->entity->create($items);
    }

    public function updateItem($itemId, array $items)
    {
        $data = $this->findSingle($itemId);
        return $data->update($items);
    }

    public function whereUpdate($column, $value, array $items)
    {
        $data = $this->whereFirst($column, $value);
        return $data->update($items);
    }


    public function withCriteria(...$criteria)
    {
        $criteria = Arr::flatten($criteria);

        foreach ($criteria as $criterion) {
            $this->entity = $criterion->apply($this->entity);
        }

        return $this;
    }


    public function getEntityClass()
    {
        if (!method_exists($this, 'entity')) {
            throw new ModelNotFoundException();
        }

        return app()->make($this->entity());

    }


}

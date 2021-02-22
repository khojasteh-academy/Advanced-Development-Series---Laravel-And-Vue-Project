<?php


namespace Modules\Core\Repositories\Base;


interface BaseContract
{

    public function all();

    public function allCount();

    public function whereCount(array $items);

    public function findSingle($id);

    public function whereFirst($column, $value);

    public function whereFirstArray(array $array);

    public function whereHasFirst($relation, $callback);

    public function findWhere($column, $value);

    public function findWhereArray(array $array);

    public function searchItem($column, $value);

    public function removeItem($item);

    public function createItem(array $items);

    public function updateItem($itemId, array $items);

    public function whereUpdate($column, $value, array $items);

}

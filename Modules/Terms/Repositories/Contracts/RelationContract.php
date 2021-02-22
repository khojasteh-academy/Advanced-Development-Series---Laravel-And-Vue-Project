<?php


namespace Modules\Terms\Repositories\Contracts;


interface RelationContract
{

    public function checkRelationExist($termTaxonomy, $postId);

}

<?php


namespace Modules\Terms\Repositories\Repositories;


use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Terms\Entities\TermRelations;
use Modules\Terms\Repositories\Contracts\RelationContract;

class RelationRepository extends BaseRepository  implements RelationContract
{

    public function entity()
    {
        return TermRelations::class;
    }

    public function checkRelationExist($termTaxonomy, $postId)
    {
        // TODO: Implement checkRelationExist() method.
    }
}

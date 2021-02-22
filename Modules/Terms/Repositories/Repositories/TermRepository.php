<?php


namespace Modules\Terms\Repositories\Repositories;


use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Terms\Entities\Terms;
use Modules\Terms\Repositories\Contracts\TermContract;

class TermRepository extends BaseRepository implements TermContract
{

    public function entity()
    {
        return Terms::class;
    }

}

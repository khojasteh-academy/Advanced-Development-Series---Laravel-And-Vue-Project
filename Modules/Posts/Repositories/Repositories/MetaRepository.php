<?php


namespace Modules\Posts\Repositories\Repositories;


use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Posts\Entities\PostMetas;
use Modules\Posts\Repositories\Contracts\MetaContract;

class MetaRepository extends BaseRepository implements MetaContract
{

    public function entity()
    {
        return PostMetas::class;
    }

}

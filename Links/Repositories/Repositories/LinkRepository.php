<?php


namespace Modules\Links\Repositories\Repositories;


use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Links\Entities\Links;
use Modules\Links\Repositories\Contracts\LinkContract;

class LinkRepository extends BaseRepository implements LinkContract
{


    public function entity()
    {
        return Links::class;
    }
}

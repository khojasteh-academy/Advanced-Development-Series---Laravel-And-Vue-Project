<?php


namespace Modules\Pages\Repositories\Repositories;


use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Pages\Entities\Pages;
use Modules\Pages\Repositories\Contracts\PageContract;

class PageRepository extends BaseRepository implements PageContract
{

    public function entity()
    {
        return Pages::class;
    }

}

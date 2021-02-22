<?php


namespace Modules\Pages\Repositories\Repositories;


use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Pages\Entities\PageOptions;
use Modules\Pages\Repositories\Contracts\PageOptionContract;

class PageOptionRepository extends BaseRepository  implements PageOptionContract
{

    public function entity()
    {
        return PageOptions::class;
    }

}

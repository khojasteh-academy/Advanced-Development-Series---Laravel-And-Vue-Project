<?php


namespace Modules\Pages\Repositories\Repositories;


use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Pages\Entities\PageLayouts;
use Modules\Pages\Repositories\Contracts\LayoutContract;

class LayoutRepository extends BaseRepository  implements LayoutContract
{

    public function entity()
    {
        return PageLayouts::class;
    }

}

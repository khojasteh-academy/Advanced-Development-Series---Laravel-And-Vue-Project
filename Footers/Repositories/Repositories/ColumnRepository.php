<?php


namespace Modules\Footers\Repositories\Repositories;


use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Footers\Entities\FooterColumns;
use Modules\Footers\Repositories\Contracts\ColumnContract;

class ColumnRepository extends BaseRepository  implements ColumnContract
{

    public function entity()
    {
        return FooterColumns::class;
    }

}

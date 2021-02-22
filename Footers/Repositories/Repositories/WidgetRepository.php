<?php


namespace Modules\Footers\Repositories\Repositories;


use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Footers\Entities\FooterWidgets;
use Modules\Footers\Repositories\Contracts\WidgetContract;

class WidgetRepository extends BaseRepository  implements WidgetContract
{

    public function entity()
    {
        return FooterWidgets::class;
    }

}

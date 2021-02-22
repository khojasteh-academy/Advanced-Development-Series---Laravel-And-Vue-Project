<?php


namespace Modules\Pages\Repositories\Repositories;


use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Pages\Entities\PageComponents;
use Modules\Pages\Repositories\Contracts\ComponentContract;

class ComponentRepository extends BaseRepository  implements ComponentContract
{

    public function entity()
    {
        return PageComponents::class;
    }

}

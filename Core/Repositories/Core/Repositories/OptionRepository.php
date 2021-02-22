<?php


namespace Modules\Core\Repositories\Core\Repositories;


use Modules\Core\Entities\Options;
use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Core\Repositories\Core\Contracts\OptionContract;

class OptionRepository extends BaseRepository implements OptionContract
{

    public function entity()
    {
        return Options::class;
    }

}

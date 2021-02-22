<?php


namespace Modules\Footers\Repositories\Repositories;


use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Footers\Entities\Footers;
use Modules\Footers\Repositories\Contracts\FooterContract;

class FooterRepository extends BaseRepository implements FooterContract
{

    public function entity()
    {
        return Footers::class;
    }

}

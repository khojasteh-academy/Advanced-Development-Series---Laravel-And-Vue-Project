<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Pages\Entities\Pages;

class Options extends Model
{
    protected $guarded = [];

    public function homePage()
    {
        return $this->belongsTo(Pages::class, 'option_data', 'id');
    }
}

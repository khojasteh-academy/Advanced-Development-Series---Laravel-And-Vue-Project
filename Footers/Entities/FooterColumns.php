<?php

namespace Modules\Footers\Entities;

use Illuminate\Database\Eloquent\Model;

class FooterColumns extends Model
{
    protected $guarded = [];

    public function widgets()
    {
        return $this->hasMany(FooterWidgets::class, 'column_id', 'id');
    }
}

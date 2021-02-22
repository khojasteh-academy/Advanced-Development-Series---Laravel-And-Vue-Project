<?php

namespace Modules\Footers\Entities;

use Illuminate\Database\Eloquent\Model;

class Footers extends Model
{
    protected $guarded = [];

    public function footerColumns()
    {
        return $this->hasMany(FooterColumns::class, 'footer_id', 'id');
    }
}

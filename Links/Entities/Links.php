<?php

namespace Modules\Links\Entities;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $guarded = [];

    public function linkChildren()
    {
        return $this->hasMany(Links::class, 'link_parent', 'id');
    }

    public function getPAthAttribute()
    {
        return "/links/$this->id";
    }
}

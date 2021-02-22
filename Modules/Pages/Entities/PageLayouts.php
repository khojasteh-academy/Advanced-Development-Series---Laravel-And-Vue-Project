<?php

namespace Modules\Pages\Entities;

use Illuminate\Database\Eloquent\Model;

class PageLayouts extends Model
{
    protected $guarded = [];

    public function components()
    {
        return $this->hasMany(PageComponents::class, 'layout_id', 'id');
    }

    public function columns()
    {
        return $this->hasMany(PageLayouts::class, 'parent_id','id')->with('components');
    }


}

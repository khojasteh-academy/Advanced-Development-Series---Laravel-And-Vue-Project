<?php

namespace Modules\Pages\Entities;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $guarded = [];

    public function layouts()
    {
        return $this->hasMany(PageLayouts::class, 'page_id', 'id')
            ->where('parent_id', 0)
            ->with(['components', 'columns']);
    }
}

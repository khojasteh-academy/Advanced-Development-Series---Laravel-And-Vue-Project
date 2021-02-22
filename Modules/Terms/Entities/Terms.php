<?php

namespace Modules\Terms\Entities;

use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
    protected $guarded = [];

    public function taxonomy()
    {
        return $this->hasOne(TermTaxonomies::class, 'blog_term_id', 'id');
    }
}

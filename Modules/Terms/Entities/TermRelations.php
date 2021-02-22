<?php

namespace Modules\Terms\Entities;

use Illuminate\Database\Eloquent\Model;

class TermRelations extends Model
{
    protected $guarded = [];

    public function taxonomy()
    {
        return $this->belongsTo(TermTaxonomies::class, 'blog_term_taxonomy_id', 'id');
    }
}

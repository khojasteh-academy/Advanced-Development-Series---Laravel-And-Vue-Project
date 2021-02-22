<?php

namespace Modules\Terms\Entities;

use Illuminate\Database\Eloquent\Model;

class TermTaxonomies extends Model
{
    protected $guarded = [];

    public function term()
    {
        return $this->belongsTo(Terms::class, 'blog_term_id', 'id');
    }

    public function subCategories()
    {
        return $this->hasMany(TermTaxonomies::class, 'parent', 'id');
    }

    public function parentCat()
    {
        return $this->belongsTo(TermTaxonomies::class, 'parent', 'id');
    }

    public function relations()
    {
        return $this->hasMany(TermRelations::class, 'blog_term_taxonomy_id', 'id');
    }
}

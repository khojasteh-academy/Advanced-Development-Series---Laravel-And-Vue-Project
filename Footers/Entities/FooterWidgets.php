<?php

namespace Modules\Footers\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Posts\Entities\Posts;
use Modules\Terms\Entities\TermTaxonomies;

class FooterWidgets extends Model
{
    protected $guarded = [];

    public function linkReference()
    {
        return $this->belongsTo(Posts::class, 'content_id', 'id');
    }

    public function posts()
    {
        return Posts::where('post_type','_blog_post')->latest()->take(5)->get();
    }

    public function tags()
    {
        return TermTaxonomies::where('taxonomy_type', 'blog_tag')->latest()->take(5)->get();
    }
}

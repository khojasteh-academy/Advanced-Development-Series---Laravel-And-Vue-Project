<?php

namespace Modules\Pages\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Posts\Entities\Posts;
use Modules\Terms\Entities\TermTaxonomies;

class PageComponents extends Model
{
    protected $guarded = [];

    public function links($linkCode)
    {
        return Posts::where('id',$linkCode)->first();
        // Or
        return Posts::findOrFail($linkCode);
    }

    public function posts()
    {
        return Posts::where('post_type', '_blog_post')->latest()->take(5)->get();
    }

    public function pages()
    {
        return Pages::where('status', 1)->latest()->get();
    }

    public function tags($limit)
    {
        return TermTaxonomies::where('taxonomy_type', 'blog_tag')->latest()->take($limit)->get();
    }

    public function categories()
    {
        return TermTaxonomies::where('taxonomy_type', 'blog_category')->latest()->get();
    }
}

<?php

namespace Modules\Posts\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Terms\Entities\TermRelations;

class PostMetas extends Model
{
    protected $guarded = [];

    public function post()
    {
        return $this->belongsTo(Posts::class, 'blog_post_id', 'id');
    }

    public function featuredImages()
    {
        return $this->hasMany(PostMetas::class, 'meta_data', 'blog_post_id')
            ->where('meta_key','_featured_image')->with('post');
    }

    public function urlChild()
    {
        return $this->belongsTo(TermRelations::class, 'blog_post_id', 'id');
    }

    public function featured()
    {
        return $this->belongsTo(Posts::class, 'meta_data', 'id');
    }

    public function getPathSlugAttribute()
    {
        return "/posts/$this->meta_data";
    }
}

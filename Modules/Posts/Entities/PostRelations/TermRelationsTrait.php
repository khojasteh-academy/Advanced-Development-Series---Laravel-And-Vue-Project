<?php


namespace Modules\Posts\Entities\PostRelations;


use Modules\Terms\Entities\TermRelations;

trait TermRelationsTrait
{

    public function categories()
    {
        $callback = function($query){
            $query->where('taxonomy_type', 'blog_category');
        };

        return $this->hasMany(TermRelations::class, 'blog_post_id', 'id')
            ->whereHas('taxonomy', $callback)
            ->with(['taxonomy' => $callback]);
    }

    public function relations()
    {
        return $this->hasMany(TermRelations::class, 'blog_post_id', 'id');
    }

    public function unusedCategories()
    {
        $callback = function ($query) {
            $query->where('taxonomy_type', 'blog_category');
        };

        return $this->hasMany(TermRelations::class, 'blog_post_id', 'id')->whereDoesntHave('taxonomy', $callback);
    }

    public function tags()
    {
        $callback = function ($query) {
            $query->where('taxonomy_type', 'blog_tag');
        };
        return $this->hasMany(TermRelations::class, 'blog_post_id', 'id')->whereHas('taxonomy', $callback);
    }



}

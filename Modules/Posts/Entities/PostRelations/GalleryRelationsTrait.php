<?php


namespace Modules\Posts\Entities\PostRelations;


use Modules\Posts\Entities\Posts;

trait GalleryRelationsTrait
{

    public function gallery()
    {
        return $this->hasMany(Posts::class, 'post_parent', 'id')->where('post_type', '_blog_gallery');
    }

    public function parent()
    {
        return $this->belongsTo(Posts::class, 'post_parent', 'id');
    }

    public function children()
    {
        return $this->hasMany(Posts::class, 'post_parent', 'id');
    }

}

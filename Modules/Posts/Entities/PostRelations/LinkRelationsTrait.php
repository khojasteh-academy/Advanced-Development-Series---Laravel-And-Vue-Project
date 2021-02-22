<?php


namespace Modules\Posts\Entities\PostRelations;


use Modules\Links\Entities\Links;
use Modules\Posts\Entities\PostMetas;

trait LinkRelationsTrait
{
    public function iconLink()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_link_icon');
    }

    public function childrenLinks()
    {
        return $this->hasMany(Links::class, 'post_parent', 'id')->where('link_parent', 0)->with('linkChildren');
    }

}

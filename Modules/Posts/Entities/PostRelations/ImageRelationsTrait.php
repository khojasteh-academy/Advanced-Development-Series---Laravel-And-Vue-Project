<?php


namespace Modules\Posts\Entities\PostRelations;


use Modules\Posts\Entities\PostMetas;

trait ImageRelationsTrait
{

    public function imagePrimaryName()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_media_primary_file_name');
    }

    public function imageFileName()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_post_image_file_usage');
    }

}

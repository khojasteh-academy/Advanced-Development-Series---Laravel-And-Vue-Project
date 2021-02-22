<?php


namespace Modules\Posts\Entities\PostRelations;


use Modules\Posts\Entities\PostMetas;

trait MetaRelationsTrait
{

    public function metas()
    {
        return $this->hasMany(PostMetas::class, 'blog_post_id', 'id');
    }


    // Post Metas

    public function modifiedPublish()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_modified_publish');
    }

    public function allowDiscussion()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_allow_comments');
    }

    public function accessibility()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_post_accessibility');
    }

    public function galleryTab()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_post_tabs_gallery');
    }

    public function discussionTab()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_post_tabs_discussion');
    }

    public function password()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_post_password');
    }

    public function youtubeTab()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_post_tabs_youtube');
    }

    public function featuredImagetype()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_featured_image_type');
    }

    public function seoTitle()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_seo_title');
    }

    public function seoMetaDesc()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_seo_meta_desc');
    }

    public function seoFocusKeyPhrase()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_seo_focus_keyphrase');
    }

    public function slug()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_post_slug');
    }

    public function video()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_post_video_id');
    }

    public function featured()
    {
        return $this->hasOne(PostMetas::class, 'blog_post_id', 'id')->where('meta_key', '_featured_image');
    }

}

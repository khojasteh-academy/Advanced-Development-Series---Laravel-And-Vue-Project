<?php


namespace Modules\Posts\Repositories\Repositories;


use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Core\Services\SlugServices;
use Modules\Posts\Entities\PostMetas;
use Modules\Posts\Entities\Posts;
use Modules\Posts\Repositories\Contracts\PostContract;
use Modules\Terms\Entities\Terms;

class PostRepository extends BaseRepository implements PostContract
{

    public function entity()
    {
        Terms::class;
        return Posts::class;
    }

    public function updateVideo($post, $params)
    {
        return $post->video->update([
            'meta_data' =>  $params
        ]);
    }

    public function updatePostItems($post, $params, $postSlug)
    {
        $slugService = new SlugServices();

        if (isset($postSlug)) {
            if ($post->slug->meta_data === $postSlug) {
                return $post->update($params);
            } else {
                $newSlug = $slugService->createSlug('meta_data', $postSlug, PostMetas::class);

                $post->update($params);
                return $post->slug->update([
                    'meta_data' =>  $newSlug
                ]);
            }
        }

        return $post->update($params);
    }

    public function updateAllowDiscussion($post, $params)
    {
        return $post->allowDiscussion->update([
            'meta_data' =>  $params
        ]);
    }

    public function updateFeaturedImageType($post, $params)
    {
        return $post->featuredImageType->update([
            'meta_data' =>  $params
        ]);
    }

    public function updateFeatured($post, $params)
    {
        return $post->featured->update([
            'meta_data' =>  $params
        ]) && $post->featuredImageType->update([
            'meta_data' =>  'Upload_Image'
        ]);
    }

    public function updateTabs($post, $params)
    {
        return $post->galleryTab->update([
            'meta_data' =>  $params[1]
        ]) && $post->discussionTab->update([
            'meta_data' =>  $params[0]
        ]) && $post->youtubeTab->update([
            'meta_data' =>  $params[2]
        ]);
    }

    public function updateAccessibility($post, $params)
    {
        return $post->accessibility->update([
            'meta_data' =>  $params
        ]);
    }

    public function updatePassword($post, $params)
    {
        return $post->password->update([
            'meta_data' =>  bcrypt($params)
        ]) && $post->accessibility->update([
            'meta_data' =>  'password'
        ]);
    }

    public function updatePostPublishDate($post, $params)
    {
        return $post->update([
            'post_publish_date' =>  $params
        ]) && $post->modifiedPublish->update([
            'meta_data' =>  1
        ]);
    }

    public function updateModifiedPublish($post)
    {
        $status = $post->modifiedPublish->meta_data;
        return $post->modifiedPublish->update([
            'meta_data' =>  !$status
        ]);
    }

    public function updateSeo($post, $params)
    {
        return $post->seoTitle->update([
            'meta_data' =>  $params[0]
        ]) && $post->seoMetaDesc->update([
            'meta_data' =>  $params[1]
        ]) && $post->seoFocusKeyphrase->update([
            'meta_data' =>  $params[2]
        ]);
    }

    public function createPost($autherId, $postTitle, $postShortDesc, $postBody, $postFormat, $postType, $postParent, $postPublishDate, $postStatus)
    {
        $post = new Posts();
        $post->author_id = $autherId;
        $post->post_title = $postTitle;
        $post->post_short_desc = $postShortDesc;
        $post->post_body = $postBody;
        $post->post_format = $postFormat;
        $post->post_type = $postType;
        $post->post_parent = $postParent;
        $post->post_publish_date = $postPublishDate;
        $post->post_status = $postStatus;
        $post->save();
        return $post;
    }

    public function getPosts()
    {
        return Posts::where('post_type', '_blog_post')->latest()->get();
    }

    public function getLinks()
    {
        return Posts::where('post_type', '_blog_links')->latest()->get();
    }
}

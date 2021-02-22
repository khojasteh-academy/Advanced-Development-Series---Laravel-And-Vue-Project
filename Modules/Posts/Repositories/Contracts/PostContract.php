<?php


namespace Modules\Posts\Repositories\Contracts;


interface PostContract
{

    public function updateVideo($post, $params);

    public function updatePostItems($post, $params, $postSlug);

    public function updateAllowDiscussion($post, $params);

    public function updateFeaturedImageType($post, $params);

    public function updateFeatured($post, $params);

    public function updateTabs($post, $params);

    public function updateAccessibility($post, $params);

    public function updatePassword($post, $params);

    public function updatePostPublishDate($post, $params);

    public function updateModifiedPublish($post);

    public function updateSeo($post, $params);

    public function getPosts();

    public function getLinks();

    public function createPost($autherId, $postTitle, $postShortDesc, $postBody, $postFormat, $postType, $postParent, $postPublishDate, $postStatus);

}

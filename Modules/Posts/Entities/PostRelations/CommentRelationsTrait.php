<?php


namespace Modules\Posts\Entities\PostRelations;


use Modules\Administrators\Entities\Administrators;
use Modules\Comments\Entities\Comments;

trait CommentRelationsTrait
{

    public function author()
    {
        return $this->belongsTo(Administrators::class, 'author_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class, 'post_id', 'id')->where([
            ['comment_approved', 1],
            ['comment_parent', 0]
        ])->with('replies');
    }

}

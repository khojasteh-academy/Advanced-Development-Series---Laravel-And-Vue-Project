<?php

namespace Modules\Comments\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Administrators\Entities\Administrators;
use Modules\Posts\Entities\Posts;
use Modules\Users\Entities\User;

class Comments extends Model
{
    protected $guarded = [];

    public function replies()
    {
        return $this->hasMany(Comments::class, 'comment_parent', 'id');
    }

    public function post()
    {
        return $this->belongsTo(Posts::class, 'post_id', 'id');
    }

    public function parentReply()
    {
        return $this->belongsTo(Comments::class, 'comment_parent', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function admin()
    {
        return $this->belongsTo(Administrators::class, 'admin_id', 'id');
    }
}

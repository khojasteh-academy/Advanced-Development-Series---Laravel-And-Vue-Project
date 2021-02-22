<?php

namespace Modules\Administrators\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Comments\Entities\Comments;
use Modules\Posts\Entities\Posts;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Administrators extends Authenticatable implements JWTSubject
{
    protected $fillable = [
        'name', 'email', 'password','csrf_token','status'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Posts::class, 'author_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class, 'admin_id', 'id');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [
            'X-CSRF-TOKEN'  =>  $this->csrf_token
        ];
    }
}

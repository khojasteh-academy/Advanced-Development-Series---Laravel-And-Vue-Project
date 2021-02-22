<?php

namespace Modules\Users\Http\Controllers;

use Config;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administrators\Entities\Administrators;
use Modules\Core\Services\ResponseHelper;
use Modules\Users\Entities\User;
use Modules\Users\Http\Requests\ChangePasswordRequest;
use Modules\Users\Http\Requests\UpdateCreateRequest;
use Modules\Users\Http\Requests\UpdateUserStatusRequest;
use Modules\Users\Repositories\Contracts\UserContract;
use Modules\Users\Traits\DeleteUserTrait;
use Modules\Users\Transformers\UserResource;

class BlogUsersController extends Controller
{

    public function __construct()
    {
        // Set User Here
        Config::set('jwt.user', User::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  User::class
        ]]);
    }

    public function me()
    {
        return response()->json(auth()->user(), 202);
    }

    public function logout()
    {
        auth()->logout();
        return response()->json([
            'message'   =>  'Done'
        ],202);
    }

}

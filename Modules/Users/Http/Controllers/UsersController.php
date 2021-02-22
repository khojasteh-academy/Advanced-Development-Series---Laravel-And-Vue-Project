<?php

namespace Modules\Users\Http\Controllers;

use Config;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administrators\Entities\Administrators;
use Modules\Core\Services\ResponseHelper;
use Modules\Users\Http\Requests\ChangePasswordRequest;
use Modules\Users\Http\Requests\UpdateCreateRequest;
use Modules\Users\Http\Requests\UpdateUserStatusRequest;
use Modules\Users\Repositories\Contracts\UserContract;
use Modules\Users\Traits\DeleteUserTrait;
use Modules\Users\Transformers\UserResource;

class UsersController extends Controller
{
    use DeleteUserTrait;
    protected $userRepository;
    protected $response;

    /**
     * UsersController constructor.
     * @param $userRepository
     */
    public function __construct(UserContract $userRepository)
    {
        // Set User Here
        Config::set('jwt.user', Administrators::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  Administrators::class
        ]]);
        $this->userRepository = $userRepository;
        $this->response = new ResponseHelper();
    }

    public function index()
    {
        $users = $this->userRepository->all();
        return UserResource::collection($users);
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $this->userRepository->updateItem($request->userCode, [
            'password'  =>  bcrypt($request->newPassword)
        ]);
        return $this->response->success();
    }

    public function changeUserStatus(UpdateUserStatusRequest $request)
    {
        $this->userRepository->updateItem($request->userCode, [
            'status'  =>  $request->userStatus
        ]);
        return $this->response->success();
    }

    public function store(UpdateCreateRequest $request)
    {
        $user = $this->userRepository->createItem([
            'name'  =>  $request->userName,
            'email'  =>  $request->userEmail,
            'password'  =>  bcrypt($request->userPassword), // You can also set this from Model
            'status'  =>  $request->userStatus,
        ]);

        return $this->response->successWithData(new UserResource($user));

    }

    public function me()
    {

    }

    public function destroy($id)
    {
        // Use this method from Trait
        $this->deleteUser($id);
        return $this->response->success();
    }


}

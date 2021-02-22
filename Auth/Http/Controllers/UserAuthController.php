<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Auth\Http\Requests\Panel\SignUpRequest;
use Modules\Core\Services\ResponseHelper;
use Modules\Users\Entities\User;
use Config;

class UserAuthController extends Controller
{
    protected $response;

    /**
     * AdministratorAuthController constructor.
     */
    public function __construct()
    {
        Config::set('jwt.user', User::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  User::class,
        ]]);
        $this->response = new ResponseHelper();

    }

    public function signup(SignUpRequest $request)
    {
        User::create([
            'name'  =>  $request->userName,
            'email'  =>  $request->userEmail,
            'password'  =>  bcrypt($request->userPassword),
        ]);
        return $this->login($request);
    }



    public function login()
    {
//        if (!request()->headers->has('X-Csrf-Token')) {
//            return $this->response->failedWithData("You are not authorized to perform this action!");
//        }

        $userEmail = request(['userEmail'][0]);
        $userPassword = request(['userPassword'][0]);

        $credentials = [
            'email' =>  $userEmail,
            'password'  =>  $userPassword
        ];

        if (! $token = auth()->attempt($credentials)) {
            return $this->response->failedWithData('Your credential info is wrong!');
        }

        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'user' => auth()->user(),
            'token' => $token,
            'token_type' => 'bearer'
        ]);
    }

}

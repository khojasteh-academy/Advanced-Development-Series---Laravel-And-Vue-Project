<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administrators\Entities\Administrators;
use Modules\Core\Services\ResponseHelper;
use Config;

class AdministratorAuthController extends Controller
{
    protected $response;

    /**
     * AdministratorAuthController constructor.
     */
    public function __construct()
    {
        Config::set('jwt.user', Administrators::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  Administrators::class,
        ]]);
        $this->response = new ResponseHelper();

    }

    public function login()
    {
        if (!request()->headers->has('X-Csrf-Token')) {
            return $this->response->failedWithData("You are not authorized to perform this action!");
        }

        $userEmail = request(['userEmail'][0]);
        $userPassword = request(['userPassword'][0]);

        $credentials = [
            'email' =>  $userEmail,
            'password'  =>  $userPassword
        ];

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token,request()->headers->get('X-Csrf-Token'), request(['userRemember'][0]));
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token, $csrfToken, $remember)
    {
        // TODO           $rememberOption
        if ($remember) {
            Config::set('jwt.ttl', 43800*12);
        }
        auth()->user()->update(
            ['csrf_token'   =>  $csrfToken]
        );

        return response()->json([
            'user' => auth()->user(),
        ])->withCookie(
            'token',
            auth()->getToken()->get(),
            config('jwt.ttl'),
            '/'
        );
    }

}

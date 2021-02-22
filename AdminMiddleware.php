<?php

namespace Modules\Core\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Modules\Core\Services\ResponseHelper;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Token;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = new ResponseHelper();

        try {
            // Check if csrf-token and cookie with token exist!
            if (!$request->headers->has('X-CSRF-TOKEN') ||
                !$request->cookies->has('token')) {
                return $response->failedWithData("You're not authorized to perform this action!");
            }

            // Get Token From COOKIE
            $rawToken = $request->cookie('token');

            // Decode Token
            $token = new  Token($rawToken);
            $payload = JWTAuth::decode($token);


            if (auth()->user()->csrf_token != $request->headers->get('X-CSRF-TOKEN')) {
                return $response->failedWithData("Authorization Failed");
            }

            $user = JWTAuth::parseToken()->authenticate();


        } catch (\Exception $exception) {
            if ($exception instanceof TokenExpiredException) {
                // TODO Set Logic go get new token or Logout user

            } elseif ($exception instanceof TokenInvalidException) {
                return $response->failedWithData("Token Invalid, Please Login Again");

            }else {
                return $response->failedWithData("You're not authorized to perform this action!");

            }

        }
        return $next($request);
    }
}

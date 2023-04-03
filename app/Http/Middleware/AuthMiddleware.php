<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     * It handles all request type methods from POST, GET and etc.
     * 
     * - This middleware will check if the authenticated user is already verified themself in the platform.
     * - Also check if the user_token was valid.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     * 
     * @author Ezekiel Reginio
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $token = Cookie::get('user_token');
            $user = JWTAuth::setToken($token)->toUser();

            return $next($request);
        } catch (Exception $e) {
            abort(403, "Please login and try again.");
        }
    }
}

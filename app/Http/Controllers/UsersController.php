<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\TokenPayloadTrait;
use App\Http\Requests\ClientRegistrationRequest;
use App\Models\User;
use App\Services\UsersService;
use App\Traits\JsonResponseTrait;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    use JsonResponseTrait, TokenPayloadTrait;
    private UsersService $service;

    public function __construct(UsersService $service)
    {
        $this->service = $service;
    }

    /**
     * Registers a client in the platform
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * 
     * @author Ezekiel Reginio <ezekiel@1export.com>
     */
    public function register(ClientRegistrationRequest $request) 
    {
        return response()->json($this->service->registerClient($request->validated()));
    }
    
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     * 
     * @author Ezekiel Reginio <ezekiel@1export.com>
     */
    public function login()
    {
        $credentials = request(['email', 'password']);
        $user = User::where('email', request()->get('email'))->firstOrFail();

        return response()->json($this->service->login($user, $credentials));
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     * 
     * @author Ezekiel Reginio <ezekiel@1export.com>
     */
    public function logout()
    {
        auth()->logout();

        return $this->parseJsonResponse([
            'message' => 'Logged out successfully.'
        ]);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     * 
     * @author Ezekiel Reginio <ezekiel@1export.com>
     */
    public function me(Request $request)
    {
        if (!isset(auth('api')->user()->id)) {
            abort(403, "Please login and try again.");
        }
        
        return auth('api')->user();
    }
}

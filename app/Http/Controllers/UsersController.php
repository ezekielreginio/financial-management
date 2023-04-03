<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\TokenPayloadTrait;
use App\Http\Requests\ClientRegistrationRequest;
use App\Models\User;
use App\Services\UsersService;
use App\Traits\JsonResponseTrait;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

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
        if (! $token = auth()->claims($this->setJWTPayload($user))->attempt($credentials)) {
            return $this->parseJsonResponse([
                'success' => false,
                'code' => 401,
                'message' => 'Invalid User Credentials. Please try again.',
                'error_code' => 'INVALID_CREDENTIALS'
            ]);
        }

        return $this->parseJsonResponse([
            'message' => 'Login Successfully',
            'data' => [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTL() * 60,
                'user' => auth()->user()
            ]
        ]);
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
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     * 
     * @author Ezekiel Reginio <ezekiel@1export.com>
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
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

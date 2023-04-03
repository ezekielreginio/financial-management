<?php

namespace App\Services;

use Exception;
use App\Models\User;
use App\Traits\JsonResponseTrait;
use Illuminate\Support\Facades\DB;
use App\Repositories\UsersRepository;
use App\Http\Controllers\Traits\TokenPayloadTrait;

class UsersService
{
    use JsonResponseTrait, TokenPayloadTrait;

    private UsersRepository $repository;
    
    public function __construct(UsersRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Registers a client in the platform
     *
     * @param array $data
     * @return array
     * 
     * @author Ezekiel Reginio <ezekiel@1export.com>
     */
    public function registerClient(array $data)
    {
        DB::beginTransaction();
        try {
            $unhashedPassword = $data['password'];
            $data['password'] = app('hash')->make($unhashedPassword);
            $user = $this->repository->storeUser($data);

            $credentials = ["email" => $data['email'], 'password' => $unhashedPassword];
            $token = $this->login($user, $credentials);

            DB::commit();

            return [
                "data" => $token['data'],
                "message" => "User registered successfully"
            ];
        } catch(Exception $e) {
            DB::rollBack();

            return [
                "message" => $e->getMessage(),
                "code" => $e->getCode()
            ];
        }
    }

    /**
     * Login a client in the platform
     *
     * @param User $user
     * @param array $credentials
     * @return array
     * 
     * @author Ezekiel Reginio <ezekiel@1export.com>
     */
    public function login(User $user, array $credentials)
    {
        if (! $token = auth()->claims($this->setJWTPayload($user))->attempt($credentials)) {
            throw new Exception('Invalid User Credentials. Please try again.', 422);
        }

        return [
            'message' => 'Login Successfully',
            'data' => [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTL() * 60,
                'user' => auth()->user()
            ]
        ];
    }
}
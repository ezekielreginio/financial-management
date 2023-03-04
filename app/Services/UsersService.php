<?php

namespace App\Services;

use App\Repositories\UsersRepository;
use Exception;
use Illuminate\Support\Facades\DB;

class UsersService
{
    private UsersRepository $repository;
    
    public function __construct(UsersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function registerClient(array $data)
    {
        DB::beginTransaction();
        try {
            $userData = $data['user'];
            $userData['password'] = app('hash')->make($userData['password']);
            $userData['fk_access_level'] = 4;
            $user = $this->repository->storeUser($userData);

            $client = $this->repository->storeClient($data['client'], $user->id);
            DB::commit();
            return [
                "data" => [
                    "user" => $user,
                    "client" => $client
                ],
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
}
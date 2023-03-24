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
            $data['password'] = app('hash')->make($data['password']);
            $user = $this->repository->storeUser($data);
            DB::commit();
            return [
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
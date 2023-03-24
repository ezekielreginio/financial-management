<?php

namespace App\Repositories;

use App\Models\User;

class UsersRepository
{
    public function storeUser(array $data)
    {
        return User::create($data);
    }
}
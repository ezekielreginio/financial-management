<?php

namespace App\Repositories;

use App\Models\AccountGroup;

class AccountsRepository
{
    public function storeAccountGroup(array $data)
    {
        return AccountGroup::create($data);
    }

    public function getAccountGroupByName(int $userId, string $name)
    {
        return AccountGroup::where([
            'fk_user' => $userId,
            'name' => $name
        ])->get();
    }
}
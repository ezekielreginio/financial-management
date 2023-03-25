<?php

namespace App\Repositories;

use App\Models\AccountGroup;

class AccountsRepository
{
    public function storeAccountGroup(array $data)
    {
        return AccountGroup::create($data);
    }
}
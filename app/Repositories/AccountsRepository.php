<?php

namespace App\Repositories;

use App\Models\Account;
use App\Models\AccountGroup;

class AccountsRepository
{
    public function storeAccountGroup(array $data)
    {
        return AccountGroup::create($data);
    }

    public function getAllAccountGroups(int $userId)
    {
        return AccountGroup::where('fk_user', $userId)
                ->with('accounts')
                ->get();
    }

    public function getAccountGroupByName(int $userId, string $name)
    {
        return AccountGroup::where([
            'fk_user' => $userId,
            'name' => $name
        ])->first();
    }
    
    public function firstOrCreateAccountGroup(int $userId, string $name)
    {
        return AccountGroup::firstOrCreate([
            'fk_user' => $userId,
            'name' => $name
        ]);
    }

    public function storeAccount(array $data)
    {
        return Account::create($data);
    }
    
    public function getAccountByName(int $accountGroup, string $name)
    {
        return Account::where([
            'fk_account_group' => $accountGroup,
            'name' => $name
        ])->first();
    }
}
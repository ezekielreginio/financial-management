<?php

namespace App\Services;

use App\Repositories\AccountsRepository;

class AccountsService
{   
    private AccountsRepository $accountsRepository;

    public function __construct(AccountsRepository $accountsRepository)
    {
        $this->accountsRepository = $accountsRepository;
    }
    
    public function createAccountGroup(array $data)
    {
        $data['fk_user'] = auth()->user()->id;
        $accountGroup = $this->accountsRepository->storeAccountGroup($data);

        return [
            'data' => [
                'account_group' => $accountGroup
            ],
            'message' => 'Account Group Created Successfully.'
        ];
    }

    public function createAccount(array $data)
    {
        $data['fk_user'] = auth()->user()->id;
        $accountGroup = $this->accountsRepository->storeAccount($data);

        return [
            'data' => [
                'account' => $accountGroup
            ],
            'message' => 'Account Created Successfully.'
        ];
    }
}
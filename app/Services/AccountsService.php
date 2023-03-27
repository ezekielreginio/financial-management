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
    
    public function createAccountGroup(array $data, int $userId)
    {
        $data['fk_user'] = $userId;
        $accountGroup = $this->accountsRepository->storeAccountGroup($data);

        return [
            'data' => [
                'account_group' => $accountGroup
            ],
            'message' => 'Account Group Created Successfully.'
        ];
    }

    public function getAllAccountGroups(int $userId)
    {
        $accountGroups = $this->accountsRepository->getAllAccountGroups($userId);

        return [
            'data' => $accountGroups,
            'message' => 'Account Groups Fetched Successfully.'
        ];
    }

    public function createAccount(array $data, int $userId)
    {
        $data['fk_user'] = $userId;

        //Checks if account name is specified in the parameters
        if (isset($data['account_group'])) {
            $accountGroup = $this->accountsRepository->firstOrCreateAccountGroup($data['fk_user'], $data['account_group']);
            $data['fk_account_group'] = $accountGroup->id;
        }

        $accountGroup = $this->accountsRepository->storeAccount($data);

        return [
            'data' => [
                'account' => $accountGroup
            ],
            'message' => 'Account Created Successfully.'
        ];
    }
}
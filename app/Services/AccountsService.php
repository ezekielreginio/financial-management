<?php

namespace App\Services;

class AccountsService
{
    public function createAccountGroup(array $data)
    {
        return [
            'data' => [
                'Test' => '123'
            ],
            'message' => 'Account Group Created Successfully.'
        ];
    }
}
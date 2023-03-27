<?php

namespace App\Rules;

use App\Repositories\AccountsRepository;
use Illuminate\Contracts\Validation\Rule;

class IsAccountUnique implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Checks if the account already exists in the account group
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $repository = resolve(AccountsRepository::class);
        $accountGroup = request()->fk_account_group ?? null;

        if (isset(request()->account_group)) {
            $accountGroup = $repository->getAccountGroupByName(request()->user()->id, request()->account_group)->id;
        }
        
        if ($repository->getAccountByName($accountGroup, $value) != null) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This account under the specified group already exists.';
    }
}

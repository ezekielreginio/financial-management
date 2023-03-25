<?php

namespace App\Rules;

use App\Repositories\AccountsRepository;
use Illuminate\Contracts\Validation\Rule;

class IsAccountGroupUnique implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $repository = resolve(AccountsRepository::class);
        if (!$repository->getAccountGroupByName(auth()->user()->id, $value)->isEmpty()) {
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
        return 'This account group already exists.';
    }
}

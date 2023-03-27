<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountGroup extends Model
{
    protected $table = 'account_groups';

    protected $fillable = [
        'name', 'fk_user', 'is_default'
    ];

    /**
     * Initialize the relationship between Account Groups and Accounts table
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accounts()
    {
        return $this->hasMany(Account::class, 'fk_account_group', 'id');
    }
}

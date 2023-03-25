<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountGroup extends Model
{
    protected $table = 'account_groups';

    protected $fillable = [
        'name', 'fk_user', 'is_default', 'initial_amount'
    ];
}

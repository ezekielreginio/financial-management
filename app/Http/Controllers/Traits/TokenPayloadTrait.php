<?php

namespace App\Http\Controllers\Traits;

use App\Models\User;

trait TokenPayloadTrait
{
    private function setJWTPayload(User $user)
    {
        return [
            'user' => [
                'id' => $user->id,
                'name' => $user->name
            ]
        ];
    }
}
<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Cookie;

trait UserInfo
{
    public function getUserInfo()
    {
        $username = Cookie::get('username');

        if (! $username) {
            return false;
        }

        return User::where('username', $username)->first();
    }
}

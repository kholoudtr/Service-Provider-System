<?php

namespace App\Http\Servicses\Global;

use App\Enums\RoleUserEnum;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function register($attrs, $role = RoleUserEnum::Client)
    {
        $attrs['password'] = Hash::make($attrs['password']);
        $user = User::create(array_merge(
            $attrs,
            [
                "role" => $role
            ]
        ));
        $token = $user->createToken("API Token");
        return comgpact('user', 'token');
    }

    public function profile(){
        return Auth::user();
    }
}

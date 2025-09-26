<?php

namespace App\Http\Controllers\Client;

use App\Enums\RoleUserEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Global\RegisterRequest;
use App\Http\Servicses\Global\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService){
        $this->authService = $authService;
    }

    public function register(RegisterRequest $request){
        $attr = $request->validated();
        return $this->authService->register($attr, RoleUserEnum::Client);
    }

    public function profile() {
        return $this->authService->profile();
    }
}

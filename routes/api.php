<?php

use App\Http\Controllers\Client\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix("client")->group(function(){
    Route::post("register", [AuthController::class, "register"]);

    Route::middleware("auth:api")->group(function(){
        Route::get("profile", [AuthController::class, "profile"]);
    });
});

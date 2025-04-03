<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;



Route::prefix('account')->group(function (){
    Route::get('/login',[AccountController::class,'login']);
    Route::post('/login',[AccountController::class,'checkLogin']);
});

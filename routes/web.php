<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;



Route::get('/show/{id}',[\App\Http\Controllers\IndexController::class,'show']);



Route::prefix('account')->group(function (){
    Route::get('/login',[AccountController::class,'login']);
    Route::post('/login',[AccountController::class,'checkLogin']);
});



Route::prefix('admin')->middleware('admin.login')->group(function () {
    Route::redirect('', 'admin/user');
    Route::resource('vehicle', \App\Http\Controllers\Admin\VehicleController::class);   
    Route::resource('vehicletype', \App\Http\Controllers\Admin\VehicleTypeController::class);
    Route::resource('user', \App\Http\Controllers\Admin\UserController::class);
});
Route::prefix('admin/login')->group(function () {
    Route::get('', [App\Http\Controllers\Admin\HomeController::class, 'getLogin']);
    Route::post('', [App\Http\Controllers\Admin\HomeController::class, 'postLogin']);
});
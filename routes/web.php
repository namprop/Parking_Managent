<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/index',[\App\Http\Controllers\UserController::class,'dashboard']);

Route::prefix('/')->group(function (){
    Route::get('/',[AccountController::class,'login']);
    Route::post('/',[AccountController::class,'checkLogin']);
});



Route::prefix('admin')->middleware('admin.login')->group(function () {
    Route::redirect('', 'admin/user');
    Route::resource('vehicle', \App\Http\Controllers\Admin\VehicleController::class);   
    Route::resource('vehicletype', \App\Http\Controllers\Admin\VehicleTypeController::class);
    Route::resource('user', \App\Http\Controllers\Admin\UserController::class);
    Route::get('/transaction/{id}/confirm', [\App\Http\Controllers\Admin\TransactionController::class, 'confirm'])->name('transaction.confirm');
    Route::post('/transaction/{id}/pay', [\App\Http\Controllers\Admin\TransactionController::class, 'pay'])->name('transaction.pay');
    

});
Route::prefix('admin/login')->group(function () {
    Route::get('', [App\Http\Controllers\Admin\HomeController::class, 'getLogin']);
    Route::post('', [App\Http\Controllers\Admin\HomeController::class, 'postLogin']);
    Route::post('/logout', [HomeController::class, 'logout'])->name('logout');
});
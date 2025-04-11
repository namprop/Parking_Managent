<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/index',[\App\Http\Controllers\UserController::class,'dashboard']);

Route::prefix('/')->group(function (){
    Route::get('/',[AccountController::class,'login']);
    Route::post('/',[AccountController::class,'checkLogin']);
    Route::post('/logout', [AccountController::class, 'logout'])->name('logoutaccount');
});


Route::prefix('admin')->middleware('admin.login')->group(function () {
    Route::resource('vehicle', \App\Http\Controllers\Admin\VehicleController::class);   
    Route::resource('vehicletype', \App\Http\Controllers\Admin\VehicleTypeController::class);
    Route::resource('user', \App\Http\Controllers\Admin\UserController::class);
    Route::get('/transaction', [\App\Http\Controllers\Admin\TransactionController::class, 'index']);
    Route::get('/transaction/{id}/confirm', [\App\Http\Controllers\Admin\TransactionController::class, 'confirm'])->name('atransaction.confirm');
    Route::post('/transaction/{id}/pay', [\App\Http\Controllers\Admin\TransactionController::class, 'pay'])->name('transaction.pay');  
    Route::delete('/transaction/{id}', [\App\Http\Controllers\Admin\TransactionController::class, 'destroy'])->name('transaction.destroy');   
});

Route::prefix('admin/login')->group(function () {
    Route::get('', [App\Http\Controllers\Admin\HomeController::class, 'getLogin']);
    Route::post('', [App\Http\Controllers\Admin\HomeController::class, 'postLogin']);
    Route::post('/logout', [HomeController::class, 'logout'])->name('logout');
});


Route::prefix('host')->middleware('host.login')->group(function () {
    route::resource('vehicle', \App\Http\Controllers\Host\VehicleController::class);
    Route::get('/transaction', [\App\Http\Controllers\Host\TransactionController::class, 'index']);
    Route::get('/transaction/{id}/confirm', [\App\Http\Controllers\Host\TransactionController::class, 'confirm'])->name('transaction.confirm');
    Route::post('/transaction/{id}/pay', [\App\Http\Controllers\Host\TransactionController::class, 'pay'])->name('transaction.pay'); 
});

Route::prefix('host/login')->group(function () {
    Route::get('', [App\Http\Controllers\Host\AccountController::class, 'getLogin']);
    Route::post('', [App\Http\Controllers\Host\AccountController::class, 'postLogin']);
    Route::post('/logout', [AccountController::class, 'logout'])->name('logout');
});


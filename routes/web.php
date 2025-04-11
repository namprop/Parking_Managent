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

Route::prefix('admin/login')->group(function () {
    Route::get('', [App\Http\Controllers\Admin\HomeController::class, 'getLogin']);
    Route::post('', [App\Http\Controllers\Admin\HomeController::class, 'postLogin']);
    Route::post('/logout', [HomeController::class, 'logout'])->name('logout');
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




Route::prefix('employee')->middleware('employee.login')->group(function () {
    route::resource('vehicle', \App\Http\Controllers\Employee\VehicleController::class);
    Route::get('/transaction', [\App\Http\Controllers\Employee\TransactionController::class, 'index']);
    Route::get('/transaction/{id}/confirm', [\App\Http\Controllers\Employee\TransactionController::class, 'confirm'])->name('transaction.confirm');
    Route::post('/transaction/{id}/pay', [\App\Http\Controllers\Employee\TransactionController::class, 'pay'])->name('transaction.pay'); 
});




<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/index',[\App\Http\Controllers\Client\UserController::class,'dashboard']);

Route::prefix('/')->group(function (){
    Route::get('/',[App\Http\Controllers\Client\AccountController::class,'login']);
    Route::post('/',[App\Http\Controllers\Client\AccountController::class,'checkLogin']);
    Route::post('/logout', [App\Http\Controllers\Client\AccountController::class, 'logout'])->name('logoutaccount');
});

Route::prefix('admin/login')->group(function () {
    Route::get('', [App\Http\Controllers\Admin\AccountController::class, 'getLogin']);
    Route::post('', [App\Http\Controllers\Admin\AccountController::class, 'postLogin']);
    Route::post('/logout', [App\Http\Controllers\Admin\AccountController::class, 'logout'])->name('logout');
});


Route::prefix('admin')->middleware('role:admin')->group(function () {
    Route::resource('vehicle', \App\Http\Controllers\Admin\VehicleController::class)->names('admin.vehicle');   
    Route::resource('vehicletype', \App\Http\Controllers\Admin\VehicleTypeController::class);
    Route::resource('user', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('pricelist',\App\Http\Controllers\Admin\PriceListController::class);    
    Route::get('/transaction', [\App\Http\Controllers\Admin\TransactionController::class, 'index']);
    Route::get('/transaction/{id}/confirm', [\App\Http\Controllers\Admin\TransactionController::class, 'confirm'])->name('transactionadmin.confirm');
    Route::post('/transaction/{id}/pay', [\App\Http\Controllers\Admin\TransactionController::class, 'pay'])->name('transactionadmin.pay');  
    Route::delete('/transaction/{id}', [\App\Http\Controllers\Admin\TransactionController::class, 'destroy'])->name('transactionadmin.destroy');  
});


Route::prefix('employee')->middleware('role:employee')->group(function () {
    route::resource('vehicle', \App\Http\Controllers\Admin\VehicleController::class)->names('employee.vehicle');
    Route::get('/transaction', [\App\Http\Controllers\Admin\TransactionController::class, 'index']);
    Route::resource('pricelist',\App\Http\Controllers\Admin\PriceListController::class);
    Route::get('/transaction/{id}/confirm', [\App\Http\Controllers\Admin\TransactionController::class, 'confirm'])->name('transaction.confirm');
    Route::post('/transaction/{id}/pay', [\App\Http\Controllers\Admin\TransactionController::class, 'pay'])->name('transaction.pay'); 
});




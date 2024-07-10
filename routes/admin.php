<?php

use App\Http\Controllers\Area\AreaController;
use App\Http\Controllers\Area\ParkingController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Vehicle\TypeController;
use App\Http\Controllers\Vehicle\VehicleController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('users', UserController::class);
Route::resource('parkings', ParkingController::class);
Route::resource('areas', AreaController::class);
Route::resource('vehicle-types', TypeController::class);
Route::resource('vehicles', VehicleController::class);
Route::resource('transactions', TransactionController::class);

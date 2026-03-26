<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth.bethany')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/works', [WorksController::class, 'index'])->name('works');
    Route::get('/rentals', [RentalController::class, 'index'])->name('rentals');
    Route::post('/home/store', [HomeController::class, 'store'])->name('home.store');
    Route::post('/works/store', [WorksController::class, 'store'])->name('works.store');
    Route::post('/rentals/store', [RentalController::class, 'store'])->name('rentals.store');
});
<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HopmeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/home/store', [HomeController::class, 'store'])->name('home.store');
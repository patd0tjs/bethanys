<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::post('/home/store', [HomeController::class, 'store'])->name('home.store');
Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
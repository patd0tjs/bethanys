<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/gallery', [ApiController::class, 'getGalleryPhotos'])->name('gallery');
Route::get('/rentals', [ApiController::class, 'getRentalPhotos'])->name('rentals');
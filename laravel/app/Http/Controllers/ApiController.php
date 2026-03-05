<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Rentals;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    public function getGalleryPhotos()
    {
        $photos = Gallery::select('link')->get()->map(function ($gallery) {
            return asset(Storage::url($gallery->link));
        });

        return response()->json($photos);
    }

    public function getRentalPhotos()
    {
        $photos = Rentals::select('link')->get()->map(function ($rentals) {
            return asset(Storage::url($rentals->link));
        });

        return response()->json($photos);
    }
}

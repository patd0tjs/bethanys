<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    public function getGalleryPhotos()
    {
        // return an array of absolute URLs so the frontend can load them directly
        $photos = Gallery::select('link')->get()->map(function ($gallery) {
            // Storage::url gives a path like "/storage/…"; asset() will prepend the app URL
            return asset(Storage::url($gallery->link));
        });

        return response()->json($photos);
    }
}

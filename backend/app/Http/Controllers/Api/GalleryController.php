<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GalleryImage;

class GalleryController extends Controller
{
    public function show(GalleryImage $galleryImage)
    {
        return response()->json(['data' => $galleryImage]);
    }
}

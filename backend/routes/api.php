<?php

use IlluminateSupportFacadesRoute;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\ServiceController;

Route::get('/services/{service:slug}', [ServiceController::class, 'show']);
Route::get('/gallery/{galleryImage:slug}', [GalleryController::class, 'show']);
Route::post('/bookings', [BookingController::class, 'store']);

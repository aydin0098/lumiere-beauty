<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'phone' => ['required', 'string', 'max:30'],
            'service_id' => ['nullable', 'exists:services,id'],
            'preferred_date' => ['required', 'date'],
            'preferred_time' => ['nullable', 'date_format:H:i'],
            'message' => ['nullable', 'string', 'max:1000'],
        ]);

        $booking = Booking::create([...$data, 'status' => 'pending']);
        return response()->json(['data' => $booking], 201);
    }
}

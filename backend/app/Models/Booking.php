<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'service_id', 'preferred_date', 'preferred_time', 'message', 'status'];
}

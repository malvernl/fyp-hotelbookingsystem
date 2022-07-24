<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function roomsDetails()
    {
        return $this->belongsTo(RoomsDetails::class, 'roomid');
    }

    public function request()
    {
        return $this->hasMany(UserRequest::class, 'bookingid');
    }
}

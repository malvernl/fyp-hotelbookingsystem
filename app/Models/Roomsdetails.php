<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomsdetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid',
        'name',
        'active'
    ];
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'bookings');
    }
}

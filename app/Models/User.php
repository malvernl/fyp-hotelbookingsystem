<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'gender',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Booking()
    {
        return $this->hasMany(Booking::class, 'userid');
    }
    
    public function checkin()
    {
        return $this->Booking->where('status', 1)->first();
    }

    public function roomsDetails()
    {
        return $this->belongsToMany(Roomsdetails::class, 'bookings', 'userid', 'roomid');
    }

    public function role()
    {
        return $this->belongsTo(Role_user::class);
    }
}

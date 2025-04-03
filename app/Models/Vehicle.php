<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    protected $table = "vehicles";
    protected $primaryKey = "id";
    protected $guarded = [];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parkingTickets()
    {
        return $this->hasMany(ParkingTicket::class);
    }
}

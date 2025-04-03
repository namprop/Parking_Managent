<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParkingSlot extends Model
{
    //

    protected $table = " parking_slots";
    protected $primaryKey = "id";
    protected $guarded = [];


    public function parkingTickets()
    {
        return $this->hasMany(ParkingTicket::class);
    }

    
}

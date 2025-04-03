<?php

namespace App\Repositories\ParkingTicket;

use App\Repositories\BaseRepository;

use App\Models\ParkingTicket;

class ParkingTicketRepository extends BaseRepository implements ParkingTicketRepositoryInterface
{
    public function getModel()
    {
        return ParkingTicket::class;
    }
}

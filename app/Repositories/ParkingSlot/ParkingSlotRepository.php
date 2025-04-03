<?php

namespace App\Repositories\ParkingSlot;

use App\Repositories\BaseRepository;

use App\Models\ParkingSlot;

class ParkingSlotRepository extends BaseRepository implements ParkingSlotRepositoryInterface
{
    public function getModel()
    {
        return ParkingSlot::class;
    }
}

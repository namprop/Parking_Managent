<?php

namespace App\Service\ParkingSlot;

use App\Service\BaseService;
use App\Repositories\ParkingSlot\ParkingSlotRepositoryInterface;

class ParkingSlotService extends BaseService implements ParkingSlotServiceInterface
{
    public $repository;

    public function __construct(ParkingSlotRepositoryInterface $ParkingSlotRepository)
    {
        $this->repository = $ParkingSlotRepository;
    }

    // Triển khai các phương thức từ ParkingSlotServiceInterface ở đây
}
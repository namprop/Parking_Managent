<?php

namespace App\Service\VehicleType;

use App\Service\BaseService;
use App\Repositories\VehicleType\VehicleTypeRepositoryInterface;

class VehicleTypeService extends BaseService implements VehicleTypeServiceInterface
{
    public $repository;

    public function __construct(VehicleTypeRepositoryInterface $VehicleTypeRepository)
    {
        $this->repository = $VehicleTypeRepository;
    }

    // Triển khai các phương thức từ VehicleTypeServiceInterface ở đây
}
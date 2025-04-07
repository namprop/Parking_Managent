<?php

namespace App\Service\Vehicle;

use App\Service\BaseService;
use App\Repositories\Vehicle\VehicleRepositoryInterface;

class VehicleService extends BaseService implements VehicleServiceInterface
{
    public $repository;

    public function __construct(VehicleRepositoryInterface $VehicleRepository)
    {
        $this->repository = $VehicleRepository;
    }
    public function searchAndPaginate($searchBy, $keyword, $perPage = 5)
    {
        return $this->repository->searchAndPaginate($searchBy, $keyword, $perPage = 5);
    }

    // Triển khai các phương thức từ VehicleServiceInterface ở đây
}
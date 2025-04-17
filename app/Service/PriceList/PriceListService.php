<?php

namespace App\Service\PriceList;

use App\Service\BaseService;

use App\Repositories\PriceList\PriceListRepositoryInterface;

class PriceListService extends BaseService implements PriceListServiceInterface
{
    public $repository;

    public function __construct(PriceListRepositoryInterface $priceListRepository)
    {
        $this->repository = $priceListRepository;
    }

    public function getPrice($vehicleTypeId, $checkIn, $checkOut)
    {
        return $this->repository->getPrice($vehicleTypeId, $checkIn, $checkOut);
    }

    public function getDuration()
    {
        return $this->repository->getDuration();
    }


}
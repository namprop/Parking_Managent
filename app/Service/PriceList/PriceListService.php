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

    public function checkErrorSort($pricelist)
    {
        $warnings = [];

        foreach ($pricelist as $vehicleTypeId => $items) {
            $sortedItems = $items->sortBy('duration')->values();

            for ($i = 1; $i < $sortedItems->count(); $i++) {
                $prev = $sortedItems[$i - 1];
                $current = $sortedItems[$i];

                if ($current->price < $prev->price) {
                    $message = " Bảng Số {$vehicleTypeId}: Thời Lượng {$current->duration} giờ có giá {$current->price} vnđ < {$prev->price} vnđ thời Lượng {$prev->duration} giờ";
                    $warnings[] = $message;
                }
            }
        }

        return $warnings;
    }
}

<?php

namespace App\Repositories\PriceList;


use App\Models\PriceList;

use App\Repositories\BaseRepository;

use Carbon\Carbon;

class PriceListRepository extends BaseRepository implements PriceListRepositoryInterface
{

    public function getModel()
    {
        return PriceList::class;
    }

    public function getDuration()
    {
        $durations = $this->model->select('duration_label', 'duration')
            ->distinct()
            ->orderBy('duration')
            ->get();

        return $durations;
    }


    public function getPrice($vehicleTypeId, $checkIn, $checkOut)
    {
        $timeIn = Carbon::parse($checkIn);
        $timeOut = Carbon::parse($checkOut ?? Carbon::now());
        $hoursParked = ceil($timeIn->floatDiffInRealHours($timeOut));

        $priceList = $this->model->where('vehicle_type_id', $vehicleTypeId)
            ->where('duration', '<=', $hoursParked)
            ->orderByDesc('duration')
            ->first();

        return $priceList ? $priceList->price : 0;

    }
};

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

    public function getPrice($vehicleTypeId, $checkIn, $checkOut)
    {

        $start = Carbon::parse($checkIn);
        $end = Carbon::parse($checkOut);
        $minutes = $start->diffInMinutes($end);

        $priceList = $this->model->where('vehicle_type_id', $vehicleTypeId)->firstOrFail();

        if ($minutes >= 30 * 24 * 60) {
            return $priceList->price_month;
        } elseif ($minutes >= 7 * 24 * 60) {
            return $priceList->price_week;
        } elseif ($minutes >= 24 * 60) {
            return $priceList->price_full_day;
        } elseif ($minutes >= 12 * 60) {
            return $priceList->price_half_day;
        } else {
            return $priceList->price_one_hour;
        }

    }
};

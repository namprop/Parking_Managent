<?php

namespace App\Repositories\PricingRule;

use App\Repositories\BaseRepository;

use App\Models\PricingRule;
use Carbon\Carbon;

class PricingRuleRepository extends BaseRepository implements PricingRuleRepositoryInterface
{
    public function getModel()
    {

        return PricingRule::class;
    }

    public function getPriceFor($vehicleTypeId, $checkIn)
    {
        $day = Carbon::parse($checkIn)->format('l');
        $time = Carbon::parse($checkIn)->format('H:i:s');
        $hour = Carbon::parse($checkIn)->hour;

        $isNightTime = ($hour >= 22 || $hour < 6);

        if (in_array($day, ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'])) {
            if ($isNightTime) {
                return PricingRule::where('vehicle_type_id', $vehicleTypeId)
                    ->where('day_of_week', 'Mon-Fri')
                    ->where('start_time', '>=', '22:00:00')
                    ->where('end_time', '<=', '06:00:00')
                    ->orderBy('price')
                    ->first();
            }
            return PricingRule::where('vehicle_type_id', $vehicleTypeId)
                ->where('day_of_week', 'Mon-Fri')
                ->where('start_time', '<=', $time)
                ->where('end_time', '>=', $time)
                ->orderBy('price')
                ->first();
        }
        if (in_array($day, ['Saturday', 'Sunday'])) {

            if ($isNightTime) {
                return PricingRule::where('vehicle_type_id', $vehicleTypeId)
                ->where('day_of_week', 'Sat-Sun')
                ->where('start_time', '>=', '22:00:00')
                ->where('end_time', '<=', '06:00:00')
                ->orderBy('price')
                ->first();
            }
            return PricingRule::where('vehicle_type_id',$vehicleTypeId)
            ->where('day_of_week', 'Sat-Sun')
            ->where('start_time', '<=', $time)
            ->where('end_time', '>=', $time)
            ->orderBy('price')
            ->first();
        }
    }
}

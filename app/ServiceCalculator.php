<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Service;
use Illuminate\Support\Facades\DB;

class ServiceCalculator extends Model
{
    public static function get_price_per_day(int $persons, Service $servicio) : int
    {
        return $persons * $servicio['price'];
    }

    public static function get_price_for_all_days(int $days, int $pricePerDay) : int
    {
        return $days * $pricePerDay;
    }

    public static function get_price_plus_onetime_service(int $price, Service $servicio) : int
    {
        return $price + $servicio['price'];
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceCalculator extends Model
{
    protected $fillable = ['name', 'price'];

    public static function get_price_per_day(int $persons, array $servicio) : int
    {
        return $persons * $servicio['price'];
    }

    public static function get_price_for_all_days(int $days, int $pricePerDay) : int
    {
        return $days * $pricePerDay;
    }

    public static function get_price_plus_onetime_service(int $price, array $servicio) : int
    {
        return $price + $servicio['price'];
    }
}
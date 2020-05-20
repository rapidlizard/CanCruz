<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\ServiceCalculator;
use App\Service;

class ServiceCalculatorTest extends TestCase
{
    public function test_if_gets_price_per_day()
    {
        $persons = 2;
        $servicio = new Service(['name' => 'paintball', 'price' => 50]);
        $expected = 100;

        $result = ServiceCalculator::get_price_per_day($persons, $servicio);

        $this->assertSame($expected, $result);
    }

    public function test_if_gets_price_for_all_days()
    {
        $days = 5;
        $pricePerDay = 10;
        $expected = 50;

        $result = ServiceCalculator::get_price_for_all_days($days, $pricePerDay);

        $this->assertSame($expected, $result);
    }

    public function test_if_gets_price_with_additional_onetime_services()
    {
        $price = 100;
        $servicio = new Service(['name' => 'paintball', 'price' => 50]);
        $expected = 105;

        $result = ServiceCalculator::get_price_plus_onetime_service($price, $servicio);

        $this->assertSame($expected, $result);
    }
}

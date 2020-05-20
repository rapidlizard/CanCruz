<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraTest extends TestCase
{
    public function test_if_calculates_room_price()
    {
        $persons = 2;
        $dias = 4;
        $expected = 48*$persons*$dias;

        $return = Calculadora::get_room_price($persons, $dias);

        $this->assertSame($expected, $return);
    }
}
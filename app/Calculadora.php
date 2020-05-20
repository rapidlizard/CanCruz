<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Calculadora extends Model
{
    protected $fillable = ['name', 'price'];

    public static function get_room_price(int $persons, int $dias) : int
    {
        return 384;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Calculadora extends Model
{

    protected $fillable = ['name', 'price'];

    private $totalPrice;
    private $breakfastPrice;
    private $petPrice;
    private $roomPrice;

    public function __construct()
    {
        $data = DB::table('calculadoras')->get();
        $this->roomPrice = $data[2]->price;
        $this->breakfastPrice = $data[0]->price;
        $this->petPrice = $data[1]->price;
    }

    public function calcularPrecioTotal(Request $request, int $totaldays)
    {
        $basicPrice = $this->roomPrice * $request->persons * $totaldays;
        $petPrice = $basicPrice + $this->petPrice;
        $breakfastPrice = $basicPrice + $this->breakfastPrice * $request->persons * $totaldays;
        $completePrice = $basicPrice + $this->breakfastPrice * $request->persons * $totaldays + $this->petPrice;

        if ($request->breakfast == 1 and $request->pet == 1) {
            return $completePrice;
        }
        if ($request->pet == 1) {
            return $petPrice;
        }
        if ($request->breakfast == 1) {
            return $breakfastPrice;
        }
        if ($request->breakfast == 0 and $request->pet == 0) {
            return $basicPrice;
        }
    }
}

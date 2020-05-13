<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Calculadora extends Model
{

    protected $fillable = ['name','price'];
    
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

    public function calcularPrecioTotal(Request $request)
    {
        $basicPrice = $this->roomPrice * $request->persons;
        $petPrice =  $basicPrice + $this->petPrice;
        $breakfastPrice = $basicPrice + $this->breakfastPrice * $request->persons;
        $completePrice = $basicPrice + $this->breakfastPrice * $request->persons + $this->petPrice ;


        if($request->breakfast == "1" AND $request->pet == "1")
            {
                return $completePrice;
            }
        if($request->pet == "1")
        {
            return $petPrice;
        }
        if($request->breakfast == "1")
        {
            
            return $breakfastPrice;
        }
        if($request->breakfast == "0" AND $request->pet == "0")
        {
            return $basicPrice;
        }
    }
}
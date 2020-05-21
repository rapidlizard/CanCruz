<?php

namespace App\Http\Controllers;

use App\Calendar;
use App\ServiceCalculator;
use App\Reserva;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ReservaController;

class PagesController extends Controller
{
    public function masia()
    {
        return view('masia');
    }

    public function huerto_cocina()
    {
        return view('huerto_cocina');
    }

    public function parque_montseny()
    {
        return view('parque_montseny');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function reserva_usuario_first()
    {
        $error = null;
        return view('reserva_usuario_first',['error'=>$error]);
    }

    public function puigracios()
    {
        return view('puigracios');
    }

    public function santcristofol()
    {
        return view('santcristofol');
    }

    public function rocacentella()
    {
        return view('rocacentella');
    }

    public function reserva_usuario_second(Request $request)
    {
        if(Reserva::validate_dates($request->check_in, $request->check_out) === false) {
            $error = "Please make sure that your check in day is before your check out day";
            return view('reserva_usuario_first', ['request' => $request, 'error' => $error]);
        }

        $days = Calendar::calculate_total_days($request->check_in, $request->check_out);

        $room = Service::where('name','=','room')->first();
        $pet = Service::where('name','=','pet')->first();
        $breakfast = Service::where('name','=','breakfast')->first();

        $price = ServiceCalculator::get_price_for_all_days($days, ServiceCalculator::get_price_per_day($request->persons, $room));

        if($request->breakfast == 1) {
            $price += ServiceCalculator::get_price_for_all_days($days, ServiceCalculator::get_price_per_day($request->persons, $breakfast));
        }
        if($request->pet == 1){
            $price += $pet->price;
        }

        $key = Reserva::generateKey($keylenght = 6);

        return view('reserva_usuario_second', ['request'=>$request, 'price' => $price, 'key' => $key]);
    }

    public function success(Request $request)
    {
        // dd($request);
        $reserva = new ReservaController();
        $reserva->store($request);
        return view('reserva_usuario_third', ['request'=> $request]);
    }

    
}
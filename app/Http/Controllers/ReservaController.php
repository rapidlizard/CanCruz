<?php

namespace App\Http\Controllers;

use App\Calendar;
use App\ServiceCalculator;
use App\Reserva;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::all();
        return view('reserva.index',['reservas' => $reservas]);
    }

    public function create(Request $request)
    {
        $key = Reserva::generateKey($keylenght = 6);
        $error = null;
        return view('reserva.create', ['request' => $request, 'error' => $error, 'key' => $key]);
    }

    public function store(Request $request)
    {
        if(Reserva::validate_dates($request->check_in, $request->check_out) === false) {
            $error = "Please make sure that your check in day is before your check out day";
            return view('reserva.create', ['request' => $request, 'error' => $error]);
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
        $check_in = \Carbon\Carbon::parse($request->check_in)->format('Y-m-d');
        $check_out = \Carbon\Carbon::parse($request->check_out)->format('Y-m-d');

        Reserva::create([
            'reservation_key' => $request->key,
            'name' => $request->name,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'persons' => $request->persons,
            'pet' => $request->pet,
            'breakfast' => $request->breakfast,
            'estancia_id' => $request->estancia_id,
            'phone' => $request->phone,
            'total_price' => $price,
        ]);

        return redirect(route('reserva.index'));
    }

    public function show(Reserva $reserva)
    {
    }

    public function edit(Reserva $reserva)
    {
        return view('reserva.edit', ['reserva' => $reserva]);
    }

    public function update(Request $request, Reserva $reserva)
    {
        if(Reserva::validate_dates($request->check_in, $request->check_out) === false) {
            $error = "Please make sure that your check in day is before your check out day";
            return view('reserva.create', ['request' => $request, 'error' => $error]);
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

        $reservaKey = Reserva::generateKey($keylenght = 6);

        $check_in = \Carbon\Carbon::parse($request->check_in)->format('Y-m-d');
        $check_out = \Carbon\Carbon::parse($request->check_out)->format('Y-m-d');

        $reserva->update([
            'name' => $request->name,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'persons' => $request->persons,
            'pet' => $request->pet,
            'breakfast' => $request->breakfast,
            'estancia_id' => $request->estancia_id,
            'phone' => $request->phone,
            'total_price' => $price
        ]);

        return redirect(route('reserva.index'));
    }

    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        return redirect(route('reserva.index'));
    }

    public function get_dates()
    {
        $reservas = Reserva::all();
        $listOfDates = [];
        foreach($reservas as $reserva){
            $alldates = Calendar::get_all_dates($reserva->check_in, $reserva->check_out);
            foreach($alldates as $date){
                array_push($listOfDates, $date);
            }
        }
        return $listOfDates;
    }
}

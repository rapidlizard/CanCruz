<?php

namespace App\Http\Controllers;

use App\Calendar;
use App\Calculadora;
use App\Reserva;
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
        
        // dd($listOfDates);
        return view('reserva.create');
    }

    public function store(Request $request)
    {
        $calculadora = new Calculadora();

        $reservaKey = Reserva::generateRandomString(6);
        $totalDays = Calendar::calculate_total_days($request->check_in, $request->check_out);
        $precioTotal = $calculadora->calcularPrecioTotal($request, $totalDays);

        Reserva::create([
            'reservation_key' => $reservaKey,
            'name' => $request->name,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'persons' => $request->persons,
            'pet' => $request->pet,
            'breakfast' => $request->breakfast,
            'estancia_id' => $request->estancia_id,
            'phone' => $request->phone,
            'total_price' => $precioTotal,
        ]);

        return redirect(route('reserva.index'));
    }

    public function validate_dates($checkin, $checkout)
    {
        if($checkin>$checkout)
        {
            return false;
        }
        if($checkin<$checkout)
        {
            return;
        }
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
        $calculadora = new Calculadora();

        $totalDays = Calendar::calculate_total_days($request->check_in, $request->check_out);
        $precioTotal = $calculadora->calcularPrecioTotal($request, $totaldays);

        $reserva->update([
            'name' => $request->name,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'persons' => $request->persons,
            'pet' => $request->pet,
            'breakfast' => $request->breakfast,
            'estancia_id' => $request->estancia_id,
            'phone' => $request->phone,
            'total_price' => $precioTotal
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

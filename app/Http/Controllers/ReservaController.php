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
        $calendar = new Calendar();

        return view('reserva.index',['reservas' => $reservas, 'calendar' => $calendar]);
    }

    public function create()
    {
   /*   $calendar = New Calendar; 
        */
        return view('reserva.create');
    }

    public function store(Request $request)
    {
        $reserva = new Reserva();
        $calculadora = new Calculadora();
        $calendar = new Calendar();

        $checkin = $request->check_in;
        $checkout = $request->check_out;

        $reservaKey = $reserva->generateRandomString(6);
        $totaldays = $calendar->calculate_total_days($checkin, $checkout);
        $precioTotal = $calculadora->calcularPrecioTotal($request, $totaldays);
        $dates = $calendar->get_all_dates($checkin, $checkout);
        
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

    public function show(Reserva $reserva)
    {
        //
    }

    public function edit(Reserva $reserva)
    {

        return view('reserva.edit', ['reserva' => $reserva]);
    }


    public function update(Request $request, Reserva $reserva)
    {
        $calendar = new Calendar();
        $calculadora = new Calculadora();

        $checkin = $request->check_in;
        $checkout = $request->check_out;

        $totaldays = $calendar->calculate_total_days($checkin, $checkout);
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
            'total_price' => $precioTotal]);

        return redirect(route('reserva.index'));
    }

    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        return redirect(route('reserva.index'));
    }
}

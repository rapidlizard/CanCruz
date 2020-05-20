<?php

namespace App\Http\Controllers;

use App\Calendar;
use App\Calculadora;
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
        $error = null;
        return view('reserva.create', ['request' => $request, 'error' => $error]);
    }

    public function store(Request $request)
    {
        $validate = Reserva::validate_dates($request->check_in, $request->check_out);
        if($validate === false) {
            $error = "wrong dates";
            return view('reserva.create', ['request' => $request, 'error' => $error]);
        }

        $reservaKey = Reserva::generateRandomString(6);

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
}

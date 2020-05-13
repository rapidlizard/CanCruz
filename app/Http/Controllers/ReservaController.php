<?php

namespace App\Http\Controllers;

use App\Reserva;
use Illuminate\Http\Request;
use App\Calculadora;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    public function index()
    {
         $reservas = Reserva::all();
        
        return view('reserva.index',['reserva'=>$reservas]);
    }

    public function create()
    {
        return view('reserva.create');
    }

    public function store(Request $request)
    {
        $calculadora = new Calculadora();

        $precioTotal = $calculadora->calcularPrecioTotal($request);

        // dd($precioTotal);
        // Reserva::create($request->all());
        Reserva::create([
            'name' => $request->name,
            'mail' => $request->mail, 
            'phone' => $request->phone, 
            'check_in' => $request->check_in, 
            'check_out' => $request->check_out, 
            'persons' => $request->persons, 
            'pet' => $request->pet, 
            'breakfast' => $request->breakfast,
            'estancias_id' => $request->estancias_id, 
            'phone' => $request->phone, 
            'total_price' => $precioTotal
            
        ]);
        
        return redirect(route('reserva.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        return view('reserva.edit',['reserva'=>$reserva]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        $reserva->update($request->all());
        return redirect(route('reserva.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        return redirect(route('reserva.index'));
    }
}

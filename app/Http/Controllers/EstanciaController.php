<?php

namespace App\Http\Controllers;

use App\Estancia;
use Illuminate\Http\Request;

class EstanciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estancias = Estancia::all();
        
        return view('estancia.index',['estancia'=>$estancias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estancia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Estancia::create($request->all());
        return redirect(route('estancia.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estancia  $estancia
     * @return \Illuminate\Http\Response
     */
    public function show(Estancia $estancia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estancia  $estancia
     * @return \Illuminate\Http\Response
     */
    public function edit(Estancia $estancia)
    {
        return view('estancia.edit',['estancia'=>$estancia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estancia  $estancia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estancia $estancia)
    {
        $estancia->update($request->all());
        return redirect(route('estancia.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estancia  $estancia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estancia $estancia)
    {
        $estancia->delete();
        return redirect(route('estancia.index'));
    }
}

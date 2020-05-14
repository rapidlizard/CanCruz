<?php

namespace App\Http\Controllers;

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

    public function reserva()
    {
        return view('reserva');
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
}
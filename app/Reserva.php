<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = ['check_in','check_out','persons','pet','name','mail','phone'];

    
    public function Estancia()
    {
        return $this->hasMany(Estancia::class);
    }
}
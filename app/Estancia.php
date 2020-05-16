<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estancia extends Model
{
    protected $fillable = ['name','status','price'];


    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}

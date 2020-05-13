<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = ['check_in','check_out','persons','pet','name','mail','phone','estancias_id','breakfast','created_at','updated_at','total_price','reservation_key'];

    
    public function Estancia()
    {
        return $this->hasMany(Estancia::class);
    }

    function generateRandomString($length) 
    { 
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
    } 

}




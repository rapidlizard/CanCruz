<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Reserva;

class Calendar extends Model
{
    protected $fillable = ['check-in','check-out', 'reservation_key'];

}




    /* function generateRandomString($length) 
    { 
        return substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
    }  */


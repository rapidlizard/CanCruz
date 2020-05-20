<?php

namespace App;

use App\ServiceCalculator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \DateTime;

class Reserva extends Model
{
    protected $fillable = ['check_in','check_out','persons','pet','name','mail','phone','estancia_id','breakfast','created_at','updated_at','total_price','reservation_key'];

    
    public function Estancia()
    {
        return $this->belongsTo(Estancia::class);
    }

    public static function generateRandomString($length) 
    { 
        return substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
    }
    
    public static function validate_dates($checkin, $checkout)
    {
        $firstDate = new DateTime($checkin);
        $secondDate = new DateTime($checkout);

        if($firstDate > $secondDate)
        {
            return false;
        }
        if($firstDate < $secondDate)
        {
            return;
        }
    }
}




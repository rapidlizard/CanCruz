<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \DateTime;
use \DateInterval;
use \DatePeriod;

class Calendar extends Model
{
    public static function calculate_total_days($check_in, $check_out)
    {
        $checkin = new DateTime($check_in);
        $checkout = new DateTime($check_out);

        $interval = date_diff($checkin, $checkout);
        $totalDays = ($interval->format('%a'));
        
        return $totalDays;
    }

    public function get_all_dates($check_in, $check_out)
    {
        $checkin = new DateTime($check_in);
        $checkout = new DateTime($check_out);

        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($checkin, $interval, $checkout);
        
        $alldates = [];
        foreach ($period as $dt) {
            array_push($alldates, $dt->format("d-m-Y"));
        } 
        
        return $alldates;
    }
}
  
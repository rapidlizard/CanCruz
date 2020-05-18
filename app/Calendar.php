<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \DateTime;

class Calendar extends Model
{
    public function calculate_total_days($check_in, $check_out)
    {
        $checkin = new DateTime($check_in);
        $checkout = new DateTime($check_out);

        $interval = date_diff($checkin, $checkout);
        $totalDays = intval($interval->format('%a'));
        
        return $totalDays;
    }
}

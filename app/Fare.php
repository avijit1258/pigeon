<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{
     protected $fillable = [
         'route_id', 'boarding_counter', 'dropping_counter', 'coach_type_id', 'seat_type_id', 'price', 'online_price', 'sell_complete', 'active_special_price', 'special_price_start_date', 'special_price_end_date', 'special_price', 'online_special_price', 'modified_by', 'modification_date',
    ];

    public function coach_type()
    {
    	return $this->belongsTo('App\CoachType');
    }
    public function seat_type()
    {
    	return $this->belongsTo('App\SeatType');
    }

    public function route()
    {
    	return $this->belongsTo('App\Route');
    }
}

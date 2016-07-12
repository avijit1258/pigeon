<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{

	 protected $fillable = [
         'coach_name', 'coach_type_id', 'route_id', 'seat_id', 'starting_counter_id', 'starting_time', 'ending_counter_id', 'ending_time', 'modified_by', 'modification_date',
    ];
    public function coach_departure_times()
    {
    	$this->hasMany('App\CoachDepartureTime');
    }
    public function coach_type()
    {

    	return $this->belongsTo('App\CoachType');
    }
    public function route()
    {
    	return $this->belongsTo('App\Route');
    }

}

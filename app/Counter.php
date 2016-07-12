<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $fillable = [
        'counter_name','company_id',   'modefied_by' , 'modefication_date', 'zone_id' ,
    ];

    public function coach_departure_times()
    {
    	return $this->hasMany('App\CoachDepartureTime');
    }



    public function zone()
    {
    	return $this->belongsTo('App\Zone');
    }
    public function company()
    {
    	return $this->belongsTo('App\Company');
    }
}

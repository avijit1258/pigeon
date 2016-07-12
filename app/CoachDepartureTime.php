<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoachDepartureTime extends Model
{
    
    protected $fillable = [
    	'coach_id', 'counter_id', 'time', 'modified_by', 'modification_date',
    ];

    public function coach()
    {
    	return $this->belongsTo('App\Coach');
    }

    public function counter()
    {
    	return $this->belongsTo('App\Counter');
    }

}

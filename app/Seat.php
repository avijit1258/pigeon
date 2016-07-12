<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    
    protected $fillable = [
    	'seat_name', 'row', 'col', 'company_id', 'modified_by', 'modification_date',
    ];
    public function seat_arrangements()
    {
    	return $this->hasMany('App\SeatArrangement');
    }
    public function coaches()
    {
    	return $this->hasMany('App\Coach');
    }

    public function company()
    {
    	return $this->belongsTo('App\Company');
    }
}

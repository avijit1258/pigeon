<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeatArrangement extends Model
{
    
    protected $fillable = [
    	'seat_id', 'row_id', 'col_id', 'seat_type_id', 'seat_name', 'modified_by', 'modification_date',
    ];
    public function seat()
    {
    	return $this->belongsTo('App\Seat');
    }
    public function seat_type()
    {
    	return $this->belongsTo('App\SeatType');
    }
}

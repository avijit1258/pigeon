<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeatType extends Model
{
    protected $fillable = [
    	'seat_type_name', 'seat_data', 'modified_by', 'modification_date',
    ];
}

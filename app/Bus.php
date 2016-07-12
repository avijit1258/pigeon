<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = [
    	'bus_number', 'seats', 'company_id', 'modified_by', 'modification_date',
    ];
    public function company()
    {

    	return $this->belongsTo('App\Company');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{

	protected $fillable = [
    	'route_name', 'company_id', 'modified_by', 'modification_date',
    ];
    
    public function route_zones()
    {
    	return $this->hasMany('App\RouteZone');
    }
    public function coaches()
    {
    	return $this->hasMany('App\Coach');
    }

    public function fares()
    {
    	return $this->hasMany('App\Fare');
    }

    public function company()
    {
    	return $this->belongsTo('App\Company');
    }
}

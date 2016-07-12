<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteZone extends Model
{
    
	protected $fillable = [
    	'route_id', 'zone_id', 'sequel', 'modified_by', 'modification_date',
    ];

    public function route()
    {
    	return $this->belongsTo('App\Route');
    }

    public function zone()
    {
    	return $this->belongsTo('App\Zone');
    }

}

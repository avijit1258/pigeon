<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = [
        'zone_name', 'modefied_by' , 'modefied_at',
    ];

    public function counters()
    {
    	return $this->hasMany('App\Counter');
    }

    public function route_zones()
    {
    	return $this->hasMany('App\RouteZone');
    }

    
}

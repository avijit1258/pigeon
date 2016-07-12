<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
         'company_name','id','modified_by', 'modification_date',
    ];
    protected $hidden = [
        
    ];
    public function buses()
    {

    	return $this->hasMany('App\Bus');
    }

    public function routes()
    {
    	return $this->hasMany('App\Route');
    }

    public function users()
    {
    	return $this->hasMany('App\User');
    }

    public function counters()
    {
    	return $this->hasMany('App\Counter');
    }

    public function seats()
    {
    	return $this->hasMany('App\Seat');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoachType extends Model
{
    protected $fillable = [
    	'coach_type', 'modified_at', 'modification_date',
    ];

    public function coaches()
    {
    	$this->hasMany('App\Coach');
    }
    public function fares()
    {
    	return $this->hasMany('App\Fare');
    }
}

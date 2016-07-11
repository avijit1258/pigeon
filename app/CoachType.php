<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoachType extends Model
{
    protected $fillable = [
    	'coach_type', 'modified_at', 'modification_date',
    ];
}

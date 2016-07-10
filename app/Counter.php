<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $fillable = [
        'counter_name','company_id', 'zone_id',  'modefied_by' , 'modefied_at', 'zone_id' ,
    ];
}

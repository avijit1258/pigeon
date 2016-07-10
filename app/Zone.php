<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = [
        'zone_name', 'modefied_by' , 'modefied_at',
    ];

    
}

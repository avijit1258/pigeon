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
}

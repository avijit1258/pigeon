<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
     protected $fillable = [
        'name', 'username', 'password', 'active', 'type','modefied_by', 'modefied_at',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $guard = "admins";

}

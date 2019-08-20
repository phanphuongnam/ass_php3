<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class users extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'birth_day',
        'is_active'
    ];
    protected $hidden = [
        'password','remember_token'
        
    ];
   

}

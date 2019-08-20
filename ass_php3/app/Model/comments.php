<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'user_id',
        'product_id',
        'content'
    ];
   
}

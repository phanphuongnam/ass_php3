<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        
        'name',
        'parent_id',
    ];
    public function products()
    {
        return $this->hasMany('App\Model\products', 'category_id', 'id');
    }
}

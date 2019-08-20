<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'price',
        'sale_percent',
        'stocks',
        'is_active',
        
        
    ];
    public function category()
    {
        return $this->belongsTo('App\Model\categories', 'category_id', 'id');
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'total',
    ];

    public function furnitures()
    {
    	return $this->belongsToMany('App\Furniture', 'furniture_order', 'order_id', 'furniture_id')
    	->as('order_line')->withPivot('quantity');;
    }
}

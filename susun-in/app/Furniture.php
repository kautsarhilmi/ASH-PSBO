<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    protected $fillable = [
        'width', 'height', 'length', 'colour', 'type', 'price',
    ];

    return $this->belongsToMany('App\Room');
    return $this->belongsToMany('App\Order');
}

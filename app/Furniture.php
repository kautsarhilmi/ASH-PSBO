<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    protected $fillable = [
        'name', 'width', 'height', 'length', 'colour', 'type', 'price',
    ];

    public function rooms()
    {
    	return $this->belongsToMany('App\Room');
    }

    public function orders()
    {
    	return $this->belongsToMany('App\Order');
    }
}

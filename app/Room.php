<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name','width','length','height','colour'
    ];

    //

    public function house()
    {
        return $this->belongsTo('App\House');
    }

    public function furnitures()
    {
        return $this->belongsToMany('App\Furniture', 'furniture_room', 'room_id', 'furniture_id')
        	->as('possession')->withPivot('quantity');;
    }
}

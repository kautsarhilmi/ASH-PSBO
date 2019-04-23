<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
    ];

    //

    public function house()
    {
        return $this->belongsTo('App\House');
    }

    return $this->belongsToMany('App\Furniture', 'furniture_room', 'room_id', 'furniture_id')
    	->as('possession')->withPivot('quantity');;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name','width','length','height','colour','type'
    ];

    //

    public function house()
    {
        return $this->belongsTo('App\House');
    }

    public function furnitures()
    {
        return $this->belongsToMany('App\Furniture', 'furniture_room', 'room_id', 'furniture_id')
        	->withPivot('quantity')->withTimestamps();
    }
    public function tags()
    {
        return $this->belongsToMany('App\Furniture', 'room_tag', 'room_id', 'tag_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    public $table = "furnitures";
    protected $fillable = [
        'name', 'width', 'height', 'length', 'price', 'description'
    ];

    public function rooms()
    {
    	return $this->belongsToMany('App\Room');
    }

    public function orders()
    {
    	return $this->belongsToMany('App\Order');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'furniture_tag', 'furniture_id', 'tag_id')
            ->withTimestamps();
    }
}

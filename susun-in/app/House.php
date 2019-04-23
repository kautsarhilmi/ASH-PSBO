<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'name',
    ];

    public function rooms()
    {
        return $this->hasMany('App\Room');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

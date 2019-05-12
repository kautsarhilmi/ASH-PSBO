<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'name' => $faker->colorName,
        'width' => 5.0,
        'height' => 3.0,
        'length' => 5.0,
    ];
});

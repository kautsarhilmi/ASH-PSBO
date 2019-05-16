<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Furniture;
use Faker\Generator as Faker;

$factory->define(Furniture::class, function (Faker $faker) {
    return [
        'name' => $faker->colorName,
        'width' => 5.0,
        'height' => 3.0,
        'length' => 5.0,
        'price' => 100000,
        'description' => $faker->sentence,
    ];
});

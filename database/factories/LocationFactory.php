<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'city' => $faker -> city(),
        'state' =>$faker -> state()
    ];
});

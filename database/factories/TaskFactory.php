<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name'=> $faker -> firstName(),
        'start_date'=>$faker -> date($format = 'Y-m-d', $max = 'now'),
        'end_date'=>$faker -> date($format = 'Y-m-d', $max = 'now'),
    ];
});

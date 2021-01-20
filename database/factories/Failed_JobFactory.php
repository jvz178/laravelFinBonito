<?php

namespace Database\Factories;

use App\Failed_Job;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(\App\Failed_Job::class, function (Faker $faker) {
    return [
        'uuid' =>$faker->name,
        'connection' =>$faker->name,
        'queue' =>$faker->name,
        'payload' =>$faker->sentence,
        'exception' =>$faker->sentence,
    ];
});

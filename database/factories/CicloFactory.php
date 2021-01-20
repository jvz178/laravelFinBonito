<?php

namespace Database\Factories;

use App\Ciclo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(\App\Ciclo::class, function(Faker $faker){
    return [
        'name' =>$faker->name,
        'img' =>$faker->name,
    ];
});

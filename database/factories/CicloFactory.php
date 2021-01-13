<?php

namespace Database\Factories;

use App\Models\ciclo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(App\ciclo::class, function(Faker $faker){
    return [
        'name' =>$faker->name,
        'img' =>$faker->name
    ];
});

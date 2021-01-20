<?php

namespace Database\Factories;

use App\Aplica;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(\App\Aplica::class, function(Faker $faker) {
    return [
        'oferta_id' => \app\oferta::all()->random()->id,
        'usuario_id' => \app\user::all()->random()->id
    ];
});

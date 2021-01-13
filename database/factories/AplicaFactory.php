<?php

namespace Database\Factories;

use App\Models\Aplica;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(App\Aplica::class, function(Faker $faker) {
    return [
        'oferta_id' => \app\ofertas::all()->random()->id,
        'usuario_id' => \app\users::all()->random()->id
    ];
});

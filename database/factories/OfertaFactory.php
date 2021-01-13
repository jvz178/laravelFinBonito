<?php

namespace Database\Factories;

use App\Models\oferta;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(App\oferta::class, function (Faker $faker) {
        return [
            'titulo' => $faker->name,
            'descripcion' => $faker->paragraph,
            'fecha_max' => $faker->date($format = 'dd-mm-YYYY'),
            'num_candidatos' => $faker->randomDigit,
            'ciclo_id' => \app\ciclos::all()->random()->id()
        ];
    });

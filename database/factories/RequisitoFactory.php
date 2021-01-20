<?php

namespace Database\Factories;

use App\Requisito;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(\App\Requisito::class, function (Faker $faker) {
        return [
            'descripcion'=>$faker->paragraph,
            'oferta_id'=>\app\oferta::all()->random()->id
        ];
    });

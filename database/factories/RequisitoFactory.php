<?php

namespace Database\Factories;

use App\Requisito;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(App\requisito::class, function (Faker $faker) {
        return [
            'description'=>$faker->paragraph,
            'oferta_id'=>\app\ofertas::all()->random()->id()
        ];
    });

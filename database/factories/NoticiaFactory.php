<?php

namespace Database\Factories;

use App\Noticia;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(App\Noticia::class, function(Faker $faker){
        return [
            'titulo' =>$faker->name,
            'imagen' =>$faker->name,
            'descripcion' =>$faker->paragraph,
            'ciclo_id' => \app\ciclos::all()->random()->id
        ];
    });

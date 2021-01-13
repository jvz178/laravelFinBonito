<?php

namespace Database\Factories;

use App\Models\usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(App\usuario::class, function (Faker $faker) {
        return [
            'nombre' => $faker->name,
            'apellido' => $faker->apellido,
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' =>$faker->safeEmail,
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'tipo' => $faker->name,
            'activado' => $faker->boolean,
            'ciclo_id' => \App\ciclos::all()->random()->id,
            'num_ofertas_inscrito' => $faker->randomDigit,
            'remember_token' => str_random(10),
        ];
    });

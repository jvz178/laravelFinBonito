<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
$factory->define(\App\User::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'tipo' => 'client',
        'activado' => $faker->boolean=True,
        'ciclo_id' => \App\ciclo::all()->random()->id,
        'num_oferta_inscrito' => 0,
        'remember_token' => str_random(10),
        // 'is_logged' =>  $faker->boolean,
    ];
});
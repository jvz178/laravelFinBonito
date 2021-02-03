<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Ciclo::class, 5)->create();
        factory(\App\Noticia::class, 25)->create();
        factory(\App\Oferta::class, 3)->create();
        factory(\App\Requisito::class, 10)->create();
        factory(\App\User::class, 50)->create();
        factory(\App\Aplica::class, 30)->create();
        factory(\App\Failed_Job::class, 20)->create();
    }
}

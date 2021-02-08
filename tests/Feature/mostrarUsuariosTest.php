<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class mostrarUsuariosTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->withoutExceptionHandling();

        factory(\App\Ciclo::class, 5)->create();
        factory(\App\Users::class, 20)->create();
    }
}

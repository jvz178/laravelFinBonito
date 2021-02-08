<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class muestraUsuariosTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->withoutExceptionHandling();
        
        factory(Ciclo::class, 5)->create();
        factory(User::class, 50)->create();

        $response=$this->get('/users');
        
        $response->assertStatus(200);

        $users = User::all();

        $response->assertViewIs('gestion');
        $response->assertViewHas('users', $users);

    }
}

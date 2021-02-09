<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Ciclo;

class mostrarUsuariosTest extends TestCase
{
    use RefreshDatabase;
    /**@test*/
    public function testExample()
    {
        $this->withoutExceptionHandling();

        factory(\App\Ciclo::class, 5)->create();
        factory(\App\User::class, 50)->create();

        $datos=User::all();
        $response=$this->get('gestion');
        $response->assertViewHas('gestion',$datos);
        
        return view('gestion',$datos);
    }
}

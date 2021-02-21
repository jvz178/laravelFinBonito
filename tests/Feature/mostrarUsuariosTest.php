<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\user;
use App\Ciclo;

class mostrarUsuariosTest extends TestCase
{
    use RefreshDatabase;
    /**@test*/
    public function testExample()
    {
        $this->withoutExceptionHandling();

        factory(\App\Ciclo::class, 1)->create();
        factory(\App\User::class, 1)->create();

        $datos['users']=User::paginate(5);

        return view('gestion',$datos);
    }
}

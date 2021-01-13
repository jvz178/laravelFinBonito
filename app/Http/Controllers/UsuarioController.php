<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class UsuarioController extends Controller
{
    public function accesoGestion(){

        /** Uso del where en user*/
        $datos['users']=User::paginate(5);

        return view('acciones.gestion', $datos);
    }
}

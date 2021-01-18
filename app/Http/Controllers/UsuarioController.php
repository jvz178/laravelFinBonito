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

    public function accesoGestionFiltrado(){

        $datos2['users']=User::where('activado',1)->paginate(5);
        
        return view('acciones.gestion', $datos2);
    }

    public function accesoGestionFiltrado2(){

        $datos3['users']=User::where('activado',0)->paginate(5);

        return view('acciones.gestion', $datos3);
    }

    public function cambiar($id, $activado){

        Users::where('id','=',id)->update($activado==0);

        $user= Users::findOrFail($id);
    }
}

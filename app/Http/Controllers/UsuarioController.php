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

    public function cambiar($id){

        $usuarioDatos = User::findOrFail($id);
        $activado = $usuarioDatos->activado;
        if ($activado==0){
            $usuarioDatos->activado=1;
            $usuarioDatos->save();
        }else{
            $usuarioDatos->activado=0;
            $usuarioDatos->save();
        }
        return back();
    }
}

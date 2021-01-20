<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
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

    public function enviarEmail(){

        $data=[
            'emailto'=>"juanvizarzuela@gmail.com",
            'subject' => "Mensaje importante",
            'content' => "Este es un correo de prueba",
        ];

        Mail::send('acciones/email', $data, function ($message) use($data){

            $message->from('salesin@gmail.com');
            $message->to($data['emailto'])->subject($data['subject']);
        });

        return back();
    }
}

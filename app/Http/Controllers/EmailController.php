<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function accederEmail(){

        return view('acciones.vistaEmail');
    }

    public function enviarEmail(){

        $data=[
        'emailto'=>"salesin300@gmail.com",
        'subject' => "Mensaje importante",
        'content' => "Este es un correo de prueba",
        ];

        Mail::send('emailEnviar',$data, function ($message) use($data){
            $message->from('salesin300@gmail.com');
            $message->to($data['emailto'])->subject($data['subject']);
        });

        return back();
    }
}

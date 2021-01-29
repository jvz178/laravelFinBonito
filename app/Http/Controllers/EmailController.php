<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function accederEmail(){

        return view('acciones.vistaEmail');
    }

    public function enviarEmail(Request $request){

        $data=[
        'emailto'=>$request['Destinatario'],
        'subject' => $request['Asunto'],
        'content' => $request['Contenido'],
        'file' => $request['Archivo'],//->file('Archivo'),
        ];

        /*if($datosEmail->hasFile('Archivo')){

            $url="SI";
        }*/

        /*Mail::send('emailEnviar',$data, function ($message) use($data){
            $message->from('salesin300@gmail.com');
            $message->to($data['emailto'])->subject($data['subject']);
            $message->attach($url->getRealPath(), array(
                'as'=>$url->getClientOriginalName(),
                'mine'=>$url->getMimeType()));
        });*/

        return response()->json($data);
    }
}

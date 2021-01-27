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

        if($request->hasFile('Archivo')){

            $request['Archivo']=$request->file('Asunto')->store('public');
        }
        
        $data=[
        'emailto'=>$request['Destinatario'],
        'subject' => $request['Asunto'],
        'content' => $request['Archivo'],
        'file' => $request['Archivo'],
        ];

        Mail::send('emailEnviar',$data, function ($message) use($data){
            $message->from('salesin300@gmail.com');
            $message->to($data['emailto'])->subject($data['subject']);
        });

        return response()->json($request);
    }
}

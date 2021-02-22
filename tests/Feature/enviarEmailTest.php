<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
// use App\Http\Controllers\EmailController;

class enviarEmailTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->withoutExceptionHandling();

        $data=[
            'emailto' => "villar.zajua20@cadiz.salesianos.edu",
            'subject' => "Prueba",
            'content' => "Prueba",
            'file' => null,
            ];
        
            if($data['emailto']==null){
                return view("Error");
            }else{
            $response=Mail::send('emailEnviar',$data, function ($message) use($data){
                $message->from('salesin300@gmail.com');
                $message->to($data['emailto'])->subject($data['subject']);
                if($data['file'] != null){
                $message->attach(request()->file('Archivo')->getRealPath(), [
                    'as'=>request()->file('Archivo')->getClientOriginalName(),
                    'mime'=>request()->file('Archivo')->getMimeType()]);
                }
            });
            return back();
           }
           
           $this->assertOk();
           $response->assertRedirect('vistaEmail');
    }
}
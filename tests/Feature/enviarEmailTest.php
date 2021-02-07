<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class enviarEmailTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        Mail::send('emailEnviar',$data, function ($message) use($data){
            $message->from('salesin300@gmail.com');
            $message->to($data['emailto'])->subject($data['subject']);
            if($data['file'] != null){
            $message->attach(request()->file('Archivo')->getRealPath(), [
                'as'=>request()->file('Archivo')->getClientOriginalName(),
                'mime'=>request()->file('Archivo')->getMimeType()]);
            }
        });
    }
}

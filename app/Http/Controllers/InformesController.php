<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class InformesController extends Controller
{
    public function general() {
        $pdf = \PDF::loadView('general');
        // Para crear un pdf en el navegador usaremos la siguiente línea
        // return $pdf->stream();
        // Para descargar un pdf en un archivo usaremos la siguiente línea
         return $pdf->download('prueba.pdf');
       }
}

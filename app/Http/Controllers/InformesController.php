<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;
use PDF;
use DB;

class InformesController extends Controller
{
    
    public function año(Request $request){
      $año=$request->año;
    }


    public function informeOferta(){

      $listaOfertas = Oferta::findOrFail($fecha_max);
      // $conjuntoOfertas= DB::table('ofertas');
      // $ofertas= DB::table('ofertas');
        // ->whereYear('fecha_max', $año)->get()
        // ->select ('oferta')
        // ->whereBetween ('fecha_max',['01-09-2011','31-08-2012']);
        return response()->json($ofertas); 
    }

    // public function general() {
    //     $pdf = \PDF::loadView('informes.general');
    //     // Para crear un pdf en el navegador usaremos la siguiente línea
    //     // return $pdf->stream();
    //     // Para descargar un pdf en un archivo usaremos la siguiente línea
    //      return $pdf->download('prueba.pdf');
    //    }
}

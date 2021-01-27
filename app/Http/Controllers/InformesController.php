<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;
use PDF;
use DB;

class InformesController extends Controller
{

    public function informeOferta(Request $request){
      
      $f_inicio=$request->get('anno'.(9-01));
      $f_fin=$request->get('anno+1'.(8-31));
      // $listaOfertas = Oferta::findOrFail($año)
       $listaOfertas= DB::table('ofertas')
      // $ofertas= DB::table('ofertas');
        // ->whereYear('fecha_max', $año)->get()
        // ->select ('oferta')
        // ->whereYear('fecha_max', $request->año)
        ->whereBetween ('fecha_max',[$f_fin,$f_fin])->get();
        // return View('informes.informeOferta');
         return response()->json($listaOfertas); 
        // $pdf = \PDF::loadView('informes.informeOferta', compact());
        // return $pdf->stream();
    }

    public function general() {
    
    return View('informes.general');
       }
}


//     $pdf = \PDF::loadView('informes.general');
    //     // Para crear un pdf en el navegador usaremos la siguiente línea
    //     // return $pdf->stream();
    //     // Para descargar un pdf en un archivo usaremos la siguiente línea
    //      return $pdf->download('prueba.pdf');
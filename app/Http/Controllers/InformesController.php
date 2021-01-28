<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;
use PDF;
use DB;

class InformesController extends Controller
{

 
    public function informeOferta(Request $request){
      $anno=$request->anyo;
      $f_inicio=$anno.'-09-01';
      $f_fin=($anno+1).'-08-31';
      $listaOfertas= DB::table('ofertas')
        ->whereBetween ('fecha_max',[$f_inicio,$f_fin])->get();
        // dd($listaOfertas);
        //  return View('informes.informeOferta',compact('listaOfertas'));
          // return response()->json($listaOfertas); 
      $pdf = PDF::loadView('informes.informeOferta', compact('listaOfertas'));
      return $pdf->stream();
    }

    public function general() {
    
    return View('informes.general');
       }

      // public function pdf(){
      //   $pdf = \PDF::loadView('informes.informeOferta');
      //   return $pdf->stream();
      // }
}


//     $pdf = \PDF::loadView('informes.general');
    //     // Para crear un pdf en el navegador usaremos la siguiente línea
    //     // return $pdf->stream();
    //     // Para descargar un pdf en un archivo usaremos la siguiente línea
    //      return $pdf->download('prueba.pdf');
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;
use App\Aplica;
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
      $pdf = PDF::loadView('informes.informeOferta', compact('listaOfertas'));
      return $pdf->stream();
    }

    public function general() {
    return View('general');
       }

    public function ofertasCiclo(Request $request){
      $ciclo=$request->cicle;
      $ofertas= DB::table('ofertas')->where('ciclo_id', "=", $ciclo)->get();
      return View ('informes/ofertas', compact('ofertas'));
    }
  

    public function listadoAlumnos(Request $request){
      $ofertaID=$request->oferID;
      $aplicas= Aplica::where('oferta_id', "=", $ofertaID)->with(['usuario'])->get();
      // $alumnos= DB::table('users')->where('id', '=', $aplicas[0]->usuario_id)->get();
      //  dd($aplicas);
      // $usuarios= User::where('id', '=', $aplicas[0]->usuario->id);
      // dd($usuarios);
      // $ciclos= Ciclo::all();
      $pdf = PDF::loadView('informes.alumnos', compact('aplicas'));
      return $pdf->stream();
      // return View ('informes.alumnos', compact('alumnos'));
    }

  
      }


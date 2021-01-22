<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Console\Presets\React;
use App\Noticia;



class NoticiaController extends Controller
{
    public function index(){
        $datos['noticias']=Noticia::paginate(5);
        return view('noticias.index',$datos);
    }

    public function create(){
        return view('noticias.create');
    }

    public function edit($id){
        $noticia=Noticia::findOrFail($id);
        return view('noticias.edit',compact('noticia'));
    }

    public function store(Request $request){
        $data=[
            'titulo'=>'required|string|max:100',
            'imagen'=>'required|string|max:100',
            'descripción'=>'required|string|max:1000',
            'ciclo_id'=>'required|integer',
        ];

        $Message=["required"=>':attribute is required'];

        $this->validate($request,$data,$Message);

        $NoticiaData=request()->except('_token'); 

        Noticia::insert($NoticiaData);

        return redirect('noticias')->with('Message','Noticia añadida');
    }

    public function update(Request $request, $id){

        $data=[
            'titulo'=>'required|string|max:100',
            'imagen'=>'required|string|max:100',
            'descripción'=>'required|string|max:1000',
            'ciclo_id'=>'required|integer',
        ];

        $Message=["required"=>':attribute is required'];

        $this->validate($request,$data,$Message);

        $NoticiaData=request()->except(['_token','_method']); 

        Noticia::where('id','=',$id)->update($NoticiaData);

        // $cycle=Cycle::findOrFail($id);

        // return redirect('cycles');

        return redirect('noticias')->with('Message','Noticia modificada');
    }

    public function destroy($id){

        $valor = noticia::where('id',$id);
        $valor -> increment('deleted');

        return redirect('noticias')->with('Message','Noticia eliminada');
    }
    
}

<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;
use Validator;


class NoticiasController extends Controller
{
    
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::all();
        return response()->json(['Noticias' => $noticias->toArray()], $this->successStatus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
         $validator = Validator::make($input, [
            'titulo' => 'required',
            'imagen' => 'required',
            'descripcion' => 'required',
            'ciclo_id' => 'required'
        ]);
        if($validator->fails()){
            return response()->json(['error' => $validator->errors()], 401);
        }
        $noticia = Noticia::create($input);
        return response()->json(['Noticia' => $noticia->toArray()], $this->successStatus);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::find($id);
        if (is_null($noticia)) {
        return response()->json(['error' => $validator->errors()], 401);
        }
        return response()->json(['Noticia' => $noticia->toArray()], $this->successStatus);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'titulo' => 'required',
            'imagen' => 'required',
            'descripcion' => 'required',
            'ciclo_id' => 'required'
        ]);
        if($validator->fails()){
        return response()->json(['error' => $validator->errors()], 401);
        }
        $noticia->titulo = $input['titulo'];
        $noticia->imagen = $input['imagen'];
        $noticia->descripcion = $input['descripcion'];
        $noticia->ciclo_id = $input['ciclo_id'];
        $noticia->save();
        return response()->json(['Noticia' => $noticia->toArray()], $this->successStatus);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticia->delete();
        return response()->json(['Noticia' => $noticia->toArray()], $this->successStatus);
    }
}

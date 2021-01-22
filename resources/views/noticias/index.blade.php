@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Message'))

<div class="alert alert-success" role="alert">
{{  Session::get('Message')  }}
</div>

@endif

<a href="{{ url('/noticias/create')}}" class="btn btn-success">Añadir Noticia</a>
<a href="{{ url('home')}}"class="btn btn-success">Volver al menú</a>
<br/><br/>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Descripción</th>
            <th>Ciclo_id</th>
        </tr>
    </thead>
    <tbody>
    @foreach($noticias as $noticia)
        <tr>
            <td>{{$noticia->titulo}}</td>
            <td>{{$noticia->imagen}}</td>
            <td>{{$noticia->descripcion}}</td>
            <td>{{$noticia->ciclo_id}}</td>
            <td>

                <a class="btn btn-warning" href="{{ url('/noticias/' .$noticia->id. '/edit/') }}">
                    Editar
                </a>


                

                <form method="post" action="{{ url('/noticias/' .$noticia->id) }}" style="display:inline">
                {{csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" onclick="return confirm('Borrar?');" class="btn btn-danger">Eliminar</button>

                </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $noticias->links() }}

</div>
@endsection
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas para el ciclo seleccionado</title>
</head>

<body>
    <h1>SalesIn</h1>
    <h2>Listado</h2>
    <br/>
    <table border="1" class="table table-light table-hover default">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha máxima</th>
                <th>Numero de candidatos</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($ofertas as $oferta)
            <tr>
            <td>{{$oferta->id}}</td>
            <td>{{$oferta->titulo}}</td>
            <td>{{$oferta->descripcion}}</td>
            <td>{{$oferta->fecha_max}}</td>
            <td>{{$oferta->num_candidatos}}</td>
            <td>
                <form method="GET" action="/informes/oferta4">
                    <button type="submit" name="oferID" value="{{$oferta->id}}" class="btn btn-default">
                        {{__("PDF")}}
                    </button>
            </td>
             @endforeach
            </tbody>
        </table>
    </tr>


     {{-- {{csrf_field()}}
                    <div class="form-group">
                        <select id="oferta" class="form-control" name="of">
                           <option value="{{$oferta->id}}">{{$oferta->id}}</option>
                       </select> 
                    </div> --}}
            {{-- <div class="form-group">
                <label for="oferta_id"  class="control-label">{{'Oferta seleccionada'}}</label>
                <input type="text"  class="form-control" name="oferta_id" id="oferta_id" value="{{ isset($oferta->id)}}"></input>
                </div>
            </tr>
                 <button type="submit" name="informe" value={{ isset($oferta->id)}} class="btn btn-default" onclick="listadoAlumnos()">
                {{__("Seleccionar")}}
            </button> --}}
           
    
</body>


</html> 





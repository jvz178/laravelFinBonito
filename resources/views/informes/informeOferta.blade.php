<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe</title>
</head>

<body>
    <h1>SalesIn</h1>
    <h2>Ofertas por curso</h2>
    <table border="1" class="table table-light table-hover default">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha máxima</th>
                <th>Numero de candidatos</th>
                <th>Ciclo ID</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($listaOfertas as $oferta)
            <tr>
            <td>{{$oferta->id}}</td>
            <td>{{$oferta->titulo}}</td>
            <td>{{$oferta->descripcion}}</td>
            <td>{{$oferta->fecha_max}}</td>
            <td>{{$oferta->num_candidatos}}</td>
            <td>{{$oferta->ciclo_id}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html> 

{{-- 
@foreach ($listaOfertas as $oferta)
{{$oferta->id}}<br/>
{{$oferta->titulo}}<br/>
{{$oferta->descripcion}}<br/>
{{$oferta->fecha_max}}<br/>
{{$oferta->num_candidatos}}<br/>
{{$oferta->ciclo_id}}   <br/> 
@endforeach --}}




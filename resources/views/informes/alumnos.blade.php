<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe</title>
</head>

<body>
    <h1>SalesIn</h1>
    <img src="images/Logo.jpg" style="float:right;width:62px;height:62px;"> 
    <h2>Usuario por oferta</h2>
    <br/>
    <table border="1" class="table table-light table-hover default">
        <thead class="thead-light">
            <tr>
                {{-- <th>ID</th> --}}
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Ciclo ID</th>
                {{-- <th>Nombre</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($aplicas as $aplica)
            <tr>
            <td>{{$aplica->usuario->id}}</td>
            <td>{{$aplica->usuario->nombre}}</td>
            <td>{{$aplica->usuario->apellido}}</td>
            <td>{{$aplica->usuario->email}}</td>
            <td>{{$aplica->usuario->ciclo_id}}</td>
            {{-- <td>{{$aplica->usuario->ciclo_id->find($ciclo->name)}}</td> --}}
            {{-- <td>{{$aplica->find($aplica->id)->ciclo->name}}</td>  --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html> 
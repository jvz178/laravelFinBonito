<!--action="{{ url('/usuario') }}"-->
{{ csrf_field() }}
{{ method_field('PATCH') }}

<h1>Gestión de usuarios</h1>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user) 
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->apellido }}</td>
                <td>{{ $user->email }}</td>
                <td>
                @if ($user->activado==0)
                <a href="{{ url('usuario',$user->id) }}">Activar</a>
                @endif
                @if ($user->activado==1)
                <a href="{{ url('usuario',$user->id) }}">Desactivar</a>
                @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br/>
<a class="btn btn-warning" href="{{ url('/') }}">Atrás</a>
<!--<select name="Filtro" class="form-control">
<option>--Escoge filtro--</option>
<option href="{{ url('/acciones/gestion/filtro') }}">Activado</option>
<option>Desactivado</option>
</select>-->
<h4>Filtros: </h4>
<a class="btn btn-warning" href="{{ url('/acciones/gestion/filtro') }}">Activos</a>
<a class="btn btn-warning" href="{{ url('/acciones/gestion/filtro2') }}">Inactivos</a>
<a class="btn btn-warning" href="{{ url('/acciones/gestion') }}">Ambos</a>
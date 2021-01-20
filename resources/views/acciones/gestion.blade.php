<form action="users" method="Patch">
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
                <input type="submit" value="Activar">
                @endif
                @if ($user->activado==1)
                <input type="submit" value="Desactivar">
                @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<select name="Filtro" class="form-control">
<option>--Escoge filtro--</option>
<option href="{{ url('/acciones/gestion/filtro') }}">Activado</option>
<option>Desactivado</option>
</select>
<a class="btn btn-warning" href="{{ url('/acciones/gestion/filtro') }}">Activos</a>
<a class="btn btn-warning" href="{{ url('/acciones/gestion/filtro2') }}">Inactivos</a>
<a class="btn btn-warning" href="{{ url('/acciones/gestion') }}">Ambos</a>
</form>
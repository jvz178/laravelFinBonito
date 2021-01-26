{{ csrf_field() }}
<h1>Email</h1>
<h4>Asunto:</h4>
<input type="text" name="Asunto">
</br></br>
<h4>Contenido:</h4>
<input type="text" name="Contenido">
</br></br>
<a href="{{ route('enviar') }}">Enviar</a>
<!--href="{{ url('acciones/vistaEmail/enviarEmail') }}"-->
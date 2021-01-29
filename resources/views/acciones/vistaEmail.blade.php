<form action="{{ route('enviar') }}" enctype="multipart/form-data">
{{ csrf_field() }}
<h1>Email</h1>
<h4>Destinatario:</h4>
<input type="text" name="Destinatario" id="destinatario">
</br></br>
<h4>Asunto:</h4>
<input type="text" name="Asunto" id="asunto">
</br></br>
<h4>Contenido:</h4>
<input type="text" name="Contenido" id="contenido">
</br></br>
<!--<label for="Archivo">{{ 'Archivo' }}</label>-->
<input type="file" name="Archivo">
</br></br>
<a href="{{ url('/') }}">Atras</a>
<input type="submit" value="Enviar">
</form>
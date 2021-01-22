<form action="{{EmailController@enviarEmail}}" method="post">
{{ csrf_field() }}
<h1>Email</h1>
<label for="Asunto">Asunto:</label>
<input type="text" name="Asunto">
</br></br>
<label for="Contenido">Contenido:</label>
<input type="text" name="Contenido">
</br></br>
<input type="submit" value="Enviar">
</form>
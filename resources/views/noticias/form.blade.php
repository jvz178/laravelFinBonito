<div class="form-group">
<label for="titulo" class="control-label">{{'Titulo'}}</label>
<input type="text" class="form-control" name="titulo" id="titulo" value="{{ isset($noticia->titulo)?$noticia->titulo:old('titulo')}}"></input>
{!! $errors->first('titulo','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="imagen"  class="control-label">{{'Imagen'}}</label>
<input type="text"  class="form-control" name="imagen" id="imagen" value="{{ isset($noticia->imagen)?$noticia->imagen:old('imagen')}}"></input>
{!! $errors->first('imagen','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="descripcion"  class="control-label">{{'Descripcion'}}</label>
<input type="text"  class="form-control" name="descripcion" id="descripcion" value="{{ isset($noticia->descripcion)?$noticia->descripcion:old('descripcion')}}"></input>
{!! $errors->first('imagen','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="ciclo_id" class="control-label">{{'Ciclo_id'}}</label>
<input type="number"  class="form-control" name="ciclo_id" id="ciclo_id" value="{{ isset($noticia->ciclo_id)?$noticia->ciclo_id:old('ciclo_id')}}"></input>
{!! $errors->first('ciclo_id','<div class="invalid-feedback">:message</div>')!!}
</div>

<input type="submit" value="{{$Type=='create' ? 'Añadir noticia':'Modificar noticia'}}" class="btn btn-success"></input>
<a class="btn btn-primary" href="{{ url('/noticias')}}">Volver</a>

</div>
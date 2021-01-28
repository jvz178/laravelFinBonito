
{{-- <h1>Ofertas SalesIn</h1>
<table border="2" class="table-light table-hover default"></table>
<title> Listado Ofertas </title>
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>
        </tr>
    </thead> --}}

@foreach ($listaOfertas as $oferta)
{{$oferta->id}}<br/>
{{$oferta->titulo}}<br/>
{{$oferta->descripcion}}<br/>
{{$oferta->fecha_max}}<br/>
{{$oferta->num_candidatos}}<br/>
{{$oferta->ciclo_id}}   <br/> 
@endforeach




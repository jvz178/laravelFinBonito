@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/noticias/'.$noticia->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('noticias.form',['Type'=>'edit'])

</form>
</div>
@endsection
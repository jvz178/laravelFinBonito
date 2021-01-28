 
 <h1 style="background-color:DodgerBlue;text-align:center;font-size:500%;">Informes de ofertas por curso</h1>
 <fieldset>
    <legend style="font-size:300%;">Seleccione el curso deseado</legend>
 <form method="GET" action="informes/ofertas">
     {{csrf_field()}}
     <div class="form-group">
         <label for="anno" class="col-md-12 control-label">
             {{__("Año")}}
         </label>
         <select id="año" class="form-control" name="anyo">
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
        </select>
     </div>
     <button type="submit" name="anno" class="btn btn-default">
         
         {{__("Seleccionar")}}
     </button>
     <a class="btn btn-warning" href="{{ url('/home/') }}">
        Volver
    </a>
    </fieldset>
    
 </form>
 


 
{{-- <a class="btn btn-primary" href="{{ url('/informes/ofertas')}}">Generar informe PDF</a>
<a href="{{ url('')}}"class="btn btn-success">Volver a menú principal</a>  --}} 
{{-- <form action="{{url('pdfOffer')}}" method="post">
    <select name="year" id="year">
    @foreach($years as $year)
        <option value="{{$year->date_max}}">{{$year->date_max}}</option>
    @endforeach
    </select>
    <a href="{{url('pdfOffer')}}">Generate pdf</a>
</form> --}}
 
 <!doctype html>
 <html lang="{{ app()->getLocale() }}">
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
 
         <title>Informes</title>
         <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 <style>
    .jumbotron {
      background-color: #78edf1;
      color: #fff;
      padding: 200px 50px;
    }
    
    .container-fluid {
      padding: 60px 50px;
    }
    .links > a {
        color: #000000;
        padding: 0 25px;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    .title {
         font-size: 84px;
            }
    html, body {
        background-color: #fff;
        color: #060808;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
            }


    </style>

    <div class="jumbotron text-center">
        <img src="images/salesin.png" style="float:right;width:100px;height:100px;">

 <h1 style="font-size:500%"> Generar Informes </h1>
 <fieldset>
    <legend style="font-size:200%;background-color:#0b0c0c">Seleccione el curso deseado</legend>
 <form method="GET" action="informes/ofertas">
     {{csrf_field()}}
     <div class="form-group">
         <label style="font-size:100%; background-color:#000000;" for="anno" class="col-md-12 control-label">
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
     <button style="font-size:100%; background-color:#dae6da" type="submit" name="anno" class="btn btn-default">
         
         {{__("Seleccionar")}}
     </button>
    
    </fieldset>
 </form>
<br/>
<br/>
 <fieldset>
    <legend style="font-size:200%; background-color:#0b0c0c">Seleccione el ciclo deseado</legend>
 <form method="GET" action="/informes/oferta3">
     {{csrf_field()}}
     <div class="form-group">
         <label style="font-size:100%; background-color:#000000;" for="ciclo" class="col-md-12 control-label">
             {{__("Ciclo")}}
         </label>
         <select id="ciclo" class="form-control" name="cicle">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select> 
     </div>
     <button style="font-size:100%; background-color:#e8f0e8" type="submit" name="ciclo" class="btn btn-default">
         
         {{__("Seleccionar")}}
     </button>
    
    </fieldset>
    <br/>
    
    <div class="links">
        <a  href="{{ url('/home/') }}">
       Volver al menú principal
       </a>
        </div>
 </form>

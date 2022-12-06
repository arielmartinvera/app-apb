@extends('plantillaApp')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.app-apb.com/resources/views/dashboard/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://www.app-apb.com/resources/views/dashboard/script.js"></script>
    
</head>
<html>
    
<body  >
<div id="sup"> 
<div id="supIzq">

    <div id="tabla">
       
        <table id="table">
            
        </table>


    </div>
</div>

</div>   
<div id="inf"> 
    <div id="infIzq"> 
    
        <canvas id="graficoBarraAtendidas" ></canvas>
    
    </div>
    <div id="infDer"> 
        
            <canvas id="graficoBarraRecibidas"></canvas>
        
    </div>
   
</div>
<script>if(window.innerWidth<1000){alert("La vista del dashboard no esta optimizada para uso movil, por favor, consulte sus datos desde un PC.")}else{ pedirDatos();}</script>
</body>

</html>


<?php




?>

@endsection
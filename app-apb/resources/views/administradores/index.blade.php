@extends('plantillaApp')

@section('content')

<?php

if(!isset($_GET['r']))
{
echo "<script language=\"JavaScript\">
 
document.location='https://www.app-apb.com/public/administradores/eliminarEmpresas?r=1&Ancho='+window.innerWidth+'&Alto='+window.innerHeight;

</script>";
}
else{


if($_GET['Ancho']>600) {
               



if(auth()->user()->email=="arielmartinvera@gmail.com"){


/*echo "<a href='https://www.app-apb.com/public/administradores/eliminarEmpresas'>enlace</a>";*/
/*echo $empresa;*/
echo "<div class='container text-center margenPrincipal'  >
<div class='navbar'><h5>Area de administracion.</h5></div>    
";
   echo "</div><div style='width:100%;margin-left:15%;'>";
    
 
echo "<div style='width:100%;margin-left:0%;'>";
echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:3%;margin:1px;border-radius:10px;" readonly="readonly"  value="idUs" id="idUsT">';
echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:7%;margin:1px;border-radius:10px;" readonly="readonly"  value="Nombre" id="NombreT">';
echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:10%;margin:1px;border-radius:10px;" readonly="readonly"  value="Email" id="EmailT">';
echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:10%;margin:1px;border-radius:10px;" readonly="readonly"  value="Empresa" id="EmpresaT">';
echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:6%;margin:1px;border-radius:10px;" readonly="readonly"  value="cif" id="cifT">';
echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:4%;margin:1px;border-radius:10px;" readonly="readonly"  value="cp" id="cpT">';
echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:15%;margin:1px;border-radius:10px;" readonly="readonly"  value="Direccion" id="DireccionT">';
echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:15%;margin:1px;border-radius:10px;" readonly="readonly"  value="IBAN" id="IBANT"></br>';

@csrf  ;
    
if(isset($empresa))
 
 {
    foreach ($empresa as $item) {
        ?><form action="https://www.app-apb.com/public/bajaEmpresa" method='POST' >
        @csrf 
        <?php
    echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:lightgrey;width:3%;margin:1px;border-radius:10px" readonly="readonly"  value="'.$item->idUsuario.'" name="idUsuario" id="idUsuario" >';
    echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:lightgrey;width:7%;margin:1px;border-radius:10px" readonly="readonly"  value="'.$item->nombreUsuario.'" name="nombreUsuario" id="nombreUsuario"" >';
    echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:lightgrey;width:10%;margin:1px;border-radius:10px" readonly="readonly"  value="'.$item->emailUsuario.'" name="emailUsuario" id="emailUsuario" >';
    echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:lightgrey;width:10%;margin:1px;border-radius:10px" readonly="readonly"  value="'.$item->nombreEmpresa.'" name="nombreEmpresa" id="nombreEmpresa"" >';
    echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:lightgrey;width:6%;margin:1px;border-radius:10px" readonly="readonly"  value="'.$item->cif.'" name="cif" id="cif"" >';
    echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:lightgrey;width:4%;margin:1px;border-radius:10px" readonly="readonly"  value="'.$item->cp.'" name="cp" id="cp" >';
    echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:lightgrey;width:15%;margin:1px;border-radius:10px" readonly="readonly"  value="'.$item->dirEmpresa.'" name="dirEmpresa" id="dirEmpresa">';
    echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:lightgrey;width:15%;margin:1px;border-radius:10px" readonly="readonly"  value="'.$item->iban.'" name="iban" id="iban" >';
    echo'<input type="submit" class="btn btn-danger spaceButton" value="Borrar" name="borrar">';   
    echo'<input type="hidden" value="'.$item->id.'" name="id">';  
   /* echo $item->idUsuario;
    echo $item->nombreUsuario;
    echo $item->emailUsuario;
    echo $item->nombreEmpresa;
    echo $item->cif;
    echo $item->cp;
    echo $item->dirEmpresa;
    echo $item->iban;*/
    echo "</br>";
    echo "</form>";
}




}
}else{echo "No esta autorizado para acceder a esta seccion";}
echo"</div></div>";}
else{
    if(auth()->user()->email=="arielmartinvera@gmail.com"){


        /*echo "<a href='https://www.app-apb.com/public/administradores/eliminarEmpresas'>enlace</a>";*/
        /*echo $empresa;*/
        echo "<div class='container text-center margenPrincipal'  >
        <div class='navbar'><h5>Area de administracion.</h5></div>    
        ";
           echo "</div><div style='width:100%;margin-left:1%;'>";
            
        
        echo "<div style='width:100%;margin-left:0%;'>";

        echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:30%;margin:1px;border-radius:10px;" readonly="readonly"  value="Email" id="EmailT">';
        echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:40%;margin:1px;border-radius:10px;" readonly="readonly"  value="Empresa" id="EmpresaT">';
       
        
        @csrf  ;
            
        if(isset($empresa))
         
         {
            foreach ($empresa as $item) {
                ?><form action="{{ route('insertaEmpresa.store') }}" method='POST' >
                @csrf 
                <?php
    
            echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:lightgrey;width:30%;margin:1px;border-radius:10px" readonly="readonly"  value="'.$item->emailUsuario.'" name="emailUsuario" id="emailUsuario" >';
            echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:lightgrey;width:40%;margin:1px;border-radius:10px" readonly="readonly"  value="'.$item->nombreEmpresa.'" name="nombreEmpresa" id="nombreEmpresa"" >';

            echo'<input type="submit" class="btn btn-danger spaceButton" value="Borrar">';   
            echo'<input type="hidden" value="'.$item->id.'" name="id">';  
       
            echo "</br>";
            echo "</form>";
        }
        
        
        
        
        }
        }else{echo "No esta autorizado para acceder a esta seccion";}
        echo"</div></div>";






}



}
?>

@endsection
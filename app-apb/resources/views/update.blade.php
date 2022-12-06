@extends('plantillaApp')

@section('content')

<?php 
echo "<div class='container text-center margenPrincipal'  >
<div class='navbar'><h5>Area edición.</h5></div>    
";
   echo "</div><div style='width:100%;margin-left:14%;'>";
    

echo "<div style='width:100%;margin-left:0%;'>";
echo '<input type="hidden" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:3%;margin:1px;border-radius:10px;" readonly="readonly"  value="idUs" id="idUsT">';
echo '<input type="hidden" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:7%;margin:1px;border-radius:10px;" readonly="readonly"  value="Nombre" id="NombreT">';
echo '<input type="hidden" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:10%;margin:1px;border-radius:10px;" readonly="readonly"  value="Email" id="EmailT">';
echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:21%;margin:1px;border-radius:10px;" readonly="readonly"  value="Empresa" id="EmpresaT">';
echo '<input type="hidden" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:6%;margin:1px;border-radius:10px;" readonly="readonly"  value="cif" id="cifT">';
echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:21%;margin:1px;border-radius:10px;" readonly="readonly"  value="cp" id="cpT">';
echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:21%;margin:1px;border-radius:10px;" readonly="readonly"  value="Direccion" id="DireccionT">';
echo '<input type="hidden" class="col-md-4 col-form-label text-md-center" style="background-color:grey;width:15%;margin:1px;border-radius:10px;" readonly="readonly"  value="IBAN" id="IBANT"></br>';


foreach ($empresa as $item) {
  ?><form action="https://www.app-apb.com/public/updatearEmpresa" method='POST' >
  @csrf 
  <?php
  
  if($item->emailUsuario==auth()->user()->email){
echo '<input type="hidden" class="col-md-4 col-form-label text-md-center" style="background-color:lightgrey;width:3%;margin:1px;border-radius:10px" readonly="readonly"  value="'.$item->idUsuario.'" name="idUsuario" id="idUsuario" >';
echo '<input type="hidden" class="col-md-4 col-form-label text-md-center" style="background-color:lightgrey;width:7%;margin:1px;border-radius:10px" readonly="readonly"  value="'.$item->nombreUsuario.'" name="nombreUsuario" id="nombreUsuario"" >';
echo '<input type="hidden" class="col-md-4 col-form-label text-md-center" style="background-color:lightgrey;width:10%;margin:1px;border-radius:10px" readonly="readonly"  value="'.$item->emailUsuario.'" name="emailUsuario" id="emailUsuario" >';
echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="width:21%;margin:1px;border-radius:10px"   value="'.$item->nombreEmpresa.'" name="nombreEmpresa" id="nombreEmpresa"" required>';
echo '<input type="hidden" class="col-md-4 col-form-label text-md-center" style="background-color:lightgrey;width:6%;margin:1px;border-radius:10px" readonly="readonly"  value="'.$item->cif.'" name="cif" id="cif"" >';
echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="width:21%;margin:1px;border-radius:10px"   value="'.$item->cp.'" name="cp" id="cp" required>';
echo '<input type="text" class="col-md-4 col-form-label text-md-center" style="width:21%;margin:1px;border-radius:10px"   value="'.$item->dirEmpresa.'" name="dirEmpresa" id="dirEmpresa" required>';
echo '<input type="hidden" class="col-md-4 col-form-label text-md-center" style="background-color:lightgrey;width:15%;margin:1px;border-radius:10px" readonly="readonly"  value="'.$item->iban.'" name="iban" id="iban" >';
echo'<input type="submit" class="btn btn-danger spaceButton" value="Editar" name="editar">';   
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
echo "</form>";}
}
echo "</div></div>";

?>

</br>

@endsection
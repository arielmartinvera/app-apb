@extends('plantillaApp')

@section('content')
<script> 
        let erroresNombreApellido=0;
        let erroresEmail=0;
          
        function nombreEmpresas(){
            let objeto=document.getElementById("nombreEmpresa");
            
            let exp=/^[A-Z a-z]+$/;
            if(exp.test(objeto.value)){
                let errores=document.getElementById("errores");
                errores.innerHTML=""; 
                erroresNombreEmpresa=0;  
            }
            else{
                
                let errores=document.getElementById("errores");
                errores.innerHTML="* No se aceptan caracteres especiales ni digitos en el nombre de la empresa";
            objeto.value="";
            erroresNombreEmpresa=1;
        
        }
        }
        function direccionEmpresas(){
            let objeto=document.getElementById("dirEmpresa");
            
            let exp=/^[A-Z a-z]+$/;
            if(exp.test(objeto.value)){
                let errores=document.getElementById("errores");
                errores.innerHTML=""; 
                erroresDireccion=0;  
            }
            else{
                
                let errores=document.getElementById("errores");
                errores.innerHTML="* No se aceptan caracteres especiales ni digitos en la direccion de la empresa";
            objeto.value="";
            erroresDireccion=1;
        
        }
        }
      
        
        function validarCif(){

          let objeto=document.getElementById("cif");
          
            exp=/^[ABCDFGHJKLMNPQRSUVWabcdfghlmnpqrsuvw]{1}[0-9]{8}$/;
            
            if(!exp.test(objeto.value)){

            let errores=document.getElementById("errores");
            errores.innerHTML="* El CIF debe tener una letra y 8 numeros a continuacion.";
            erroresCif=1;
            objeto.value="";
            }else{
            let errores=document.getElementById("errores");
            errores.innerHTML="";
            erroresCif=0;
            }

        }
        function validarCp(){

        let objeto=document.getElementById("cp");

          exp=/^[0-9]+$/;
          
          if(!exp.test(objeto.value)){

          let errores=document.getElementById("errores");
          errores.innerHTML="* El el cp debe tener  al menos un numero.";
          erroresCp=1;
          objeto.value="";
          }else{
          let errores=document.getElementById("errores");
          errores.innerHTML="";
          erroresCp=0;
          }

        }
        function validarIban(){

        let objeto=document.getElementById("iban");

          exp=/^[A-Z]{2}-{1}[0-9]{2}-{1}[0-9]{4}-{1}[0-9]{4}-{1}[0-9]{2}-{1}[0-9]{10}$/;
          
          if(!exp.test(objeto.value)){

          let errores=document.getElementById("errores");
          errores.innerHTML="* El IBAN debe tener formato ES-00-0000-0000-00-0000000000.";
          erroresIban=1;
          objeto.value="";
          }else{
          let errores=document.getElementById("errores");
          errores.innerHTML="";
          erroresIban=0;
          }

        }
      


        
        function revisionGlobal(){
          nombreEmpresas();
          direccionEmpresas();
          validarCp();
          validarCif();
          validarIban();
            if(erroresNombreEmpresa+erroresDireccion+erroresCif+erroresCp+erroresIban>0){
                
            event.preventDefault();
            let errores=document.getElementById("errores");
            errores.innerHTML="Tienes errores en el formulario, no podras enviarlo hasta tenerlo ok";
            }

        }
        function cargar(){

            let nombreEmpresa=document.getElementById("nombreEmpresa");
            nombreEmpresa.addEventListener("focusout",nombreEmpresas);

            let dirEmpresa=document.getElementById("dirEmpresa");
            dirEmpresa.addEventListener("focusout",direccionEmpresas);
            
            let cif=document.getElementById("cif");
            cif.addEventListener("focusout",validarCif);

            let cp=document.getElementById("cp");
            cp.addEventListener("focusout",validarCp);

            let iban=document.getElementById("iban");
            iban.addEventListener("focusout",validarIban);

            let enviar=document.getElementById("enviar");
            enviar.addEventListener("click",revisionGlobal);
        }
       
    </script>

</br>

<div class="container text-center margenPrincipal"  >
<div class="navbar";"><h5>Contrata nuestro servicio.</h5></div>    
<div >
<form action="https://www.app-apb.com/public/insertaEmpresa" method="POST" style="width:50%;margin-left:25%;">
@csrf  
<input type="hidden" class="form-control"  value="<?php echo auth()->id()?>" name="idSesion" id="idSesion" >

<div class="mb-3">
    <label  class="form-label">Tu usuario de sesion actual es:</label>
    <input type="text" class="form-control text-md-center" style="background-color:lightgrey;" readonly="readonly"  value="<?php echo auth()->user()->name?>" name="usuarioSesion" id="usuarioSesion" >
</div>

<div class="mb-3">
    <label class="form-label">Tu correo electrónico asociado:</label>
    <input type="email" readonly="readonly" style="background-color:lightgrey;" value ="<?php echo auth()->user()->email?>" class="form-control text-md-center" name="email" id="email">
  </div>

    <div class="mb-3">
    <label  class="form-label">Nombre de tu empresa:</label>
    <input type="text" class="form-control text-md-center" name="nombreEmpresa" id="nombreEmpresa" require>
    
  </div>
  
  <div class="mb-3">
    <label  class="form-label">CIF:</label>
    <input type="text" class="form-control text-md-center" name="cif" id="cif" require >
  </div>

  <div class="mb-3">
    <label  class="form-label">Codigo Postal:</label>
    <input type="text" class="form-control text-md-center" name="cp" id="cp" require>
  </div>

  <div class="mb-3">
    <label  class="form-label">Direccion de la Empresa:</label>
    <input type="text" class="form-control text-md-center" name="dirEmpresa" id="dirEmpresa" require>
  </div>

  <div class="mb-3">
    <label  class="form-label">IBAN:</label>
    <input type="text" class="form-control text-md-center" name="iban" id="iban" require placeholder="Ej: ES-00-0000-0000-00-0000000000">
  </div>
  
  <button type="submit" class="btn btn-primary" id="enviar">Solicitar</button>
  <p><label class="form-label" style="color:red;" id="errores"></label></p>
</form>
</div>
</div>

</br>
<script>cargar();</script>
@endsection
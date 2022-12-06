@extends('plantillaApp')

@section('content')
<script> 
        let erroresNombreApellido=0;
        let erroresEmail=0;
          
        function validarNombreApellido(){
            let objeto=document.getElementById("nombre");
            
            let exp=/^[A-Z a-z]+$/;
            if(exp.test(objeto.value)){
                let errores=document.getElementById("errores");
                errores.innerHTML=""; 
                erroresNombreApellido=0;  
            }
            else{
                
                let errores=document.getElementById("errores");
                errores.innerHTML="* No se aceptan caracteres especiales ni digitos en el "+objeto.id;
            objeto.value="";
            erroresNombreApellido=1;
        
        }
        }
      
        
        function validarEmail(){

          let objeto=document.getElementById("email");
            exp=/^[A-Z a-z 0-9 - .]+@{1}[A-Z a-z 0-9 -]+.{1}[A-Z a-z 0-9]+$/;
            
            if(!exp.test(objeto.value)){

            let errores=document.getElementById("errores");
            errores.innerHTML="* El correo solo permite '.', '-', numeros y letras.";
            erroresEmail=1;
            objeto.value="";
            }else{
            let errores=document.getElementById("errores");
            errores.innerHTML="";
            erroresEmail=0;
            }

        }
      


        
        function revisionGlobal(){
          validarNombreApellido();
          validarEmail();
            if(erroresNombreApellido+erroresEmail>0){
                
            event.preventDefault();
            let errores=document.getElementById("errores");
            errores.innerHTML="Tienes errores en el formulario, no podras enviarlo hasta tenerlo ok";
            }

        }
        function cargar(){

            let nombre=document.getElementById("nombre");
          
            nombre.addEventListener("focusout",validarNombreApellido);
            
            let email=document.getElementById("email");
            email.addEventListener("focusout",validarEmail);
            let enviar=document.getElementById("enviar");
            enviar.addEventListener("click",revisionGlobal);
        }
       
    </script>
  

</br>
 
<div class="container text-center margenPrincipal"  >
<div class="navbar";"><h5>Envíanos una solicitud de información.</h5></div>    
<div >
<form action="https://www.app-apb.com/public/contactos" method="POST" style="width:50%;margin-left:25%;">
@csrf  
<div class="mb-3">
    <label  class="form-label ">Tu nombre</label>
    <input type="text" class="form-control text-md-center" name="nombre" id="nombre" aria-describedby="emailHelp" require>
    <div id="emailHelp" class="form-text">No compartiremos tus datos con nadie más.</div>
  </div>
  <div class="mb-3">
    <label class="form-label ">Tu correo electrónico</label>
    <input type="email" class="form-control text-md-center" name="email" id="email" require>
  </div>
 
  <button type="submit" class="btn btn-primary" id="enviar">Solicitar</button></br>
  <label class="form-label" style="color:red;" id="errores"></label>
</form>
</div>
</div>

<script> cargar();</script>

@endsection
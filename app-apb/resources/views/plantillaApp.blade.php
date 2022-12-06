

<!DOCTYPE html>
<html lang="en">
<head>

    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Puro Bit</title>
    <link href="https://www.app-apb.com/resources/css/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script language="javascript">function hide() {document.getElementById("advice").style.visibility = "hidden";document.getElementById("advice").innerHTML = "";document.cookie="cookie=1";}</script>
<style>
  df-messenger {
   --df-messenger-bot-message: #6445f1;
   --df-messenger-button-titlebar-color: #6445f1;
   --df-messenger-chat-background-color: #fafafa;
   --df-messenger-font-color: white;
   --df-messenger-send-icon: #6445f1;
   --df-messenger-user-message: #8f8f8f;
  }
</style>

</head>
<body>
<?php 
if(isset($_GET["correoEnviado"])){
  echo "<script>alert('El correo informativo se ha enviado correctamente')</script> ";
  echo "<script>document.location='https://www.app-apb.com/public/' </script>";
}
if(isset($_GET["altaEmpresa"])){
  echo "<script>alert('El alta de la empresa se ha gestionado correctamente.')</script> ";
  echo "<script>document.location='https://www.app-apb.com/public/' </script>";
}

if(isset($_GET["update"])){
  echo "<script>alert('Los datos han sido modificados correctamente.')</script> ";
  echo "<script>document.location='https://www.app-apb.com/public/' </script>";
}


session_start();

if (!isset($_COOKIE['cookie'])) {

$advice = "<div  id='advice' style='display: flex;flex-direction: column;justify-content: center;align-items: center;text-align:center;top: 180px;position:fixed;

width:50%;left:25%;z-index:1000;height:450px;border-width:7px;border-style:solid;border-color:#6445f1;background-color:white;border-radius:10px;'>
<div style='font-size:25px'>Aviso Legal</div>
<div style='margin:15px;font-size:15px; '>Utilizamos cookies propias para conseguir mejorar navegación y seguridad de nuestros usuarios. Si acepta o continúa navegando, consideramos que acepta su uso.</div> 
<div><a href='https://www.app-apb.com/public/' onclick='hide()'><button class='btn btn-primary spaceButton'>Acepto</button></a></div>
</div>";

}else{$advice="";}

?>
<?=$advice;?>
  <div class="navegacion">
  <div style="height: 100px;"><img style="height: 160px;width:100%"src="https://www.app-apb.com/resources/img/frontImage.webp"></img></div>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.app-apb.com/public">APP-APB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
  
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ¿Quienes somos?
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://www.app-apb.com/public/bigdata">Nuestros Servicios</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://www.app-apb.com/public/conocenos">Conócenos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://www.app-apb.com/public/info">Solicitanos información</a></li>
          </ul>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="https://www.app-apb.com/public/altaEmpresa">Dar de Alta una Empresa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.app-apb.com/public/update">Modificar Empresas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.app-apb.com/public/dashboard">Dashboard</a>
        </li>
        
        <li class="nav-item">
          <span class="nav-link"><u><?php if(auth()->user()){echo "Usuario logado: " . auth()->user()->name . " ";}?></u></span>
        </li>
       
        
       
      </ul>
      
      <input id="emailUser" type="hidden" value=<?php if(auth()->user()){echo auth()->user()->email;}?>>
      <ul class="navbar-nav">
      
      <li class="nav-item"><?php if(!auth()->user()){echo '<a href="https://www.app-apb.com/public/login"><button type="button" class="btn btn-primary spaceButton">Iniciar sesion</button></a>';}?></li>
       <li class="nav-item"> <?php if(!auth()->user()){echo '<a href="https://www.app-apb.com/public/register"><button type="button" class="btn btn-primary spaceButton">Registrarse</button></a>';}?></li>
     <li class="nav-item"> <form action="https://www.app-apb.com/public/logout" method="POST">
                                @csrf
                                <?php if(auth()->user()){echo '<button class="btn btn-primary spaceButton" type="submit"> Logout </button>
                            ';}?></form></li>
      <li class="nav-item"><?php if(auth()->user()){if(auth()->user()->email=="arielmartinvera@gmail.com"){echo '<a href="https://www.app-apb.com/public/administradores/eliminarEmpresas"><button type="button" class="btn btn-danger spaceButton">Admin</button></a>';}}?></li>
      </ul>
    </div>
  </div>
</nav>
</div>
</br>
    @yield('content')

<footer class="text-center text-lg-start bg-light text-muted">
  
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
   
    <div class="me-5 d-none d-lg-block">
      <span>Mantente conectado a tu empresa y a la tecnología:</span>
    </div>
    

    
    <div>
      <a href="https://www.facebook.com/" class="me-4 link-secondary">
        <img src="https://www.app-apb.com/resources/img/facebook.png" style="width:25px"></i>
      </a>
      <a href="https://www.instagram.com/" class="me-4 link-secondary">
      <img src="https://www.app-apb.com/resources/img/instagram.png" style="width:25px"></i>
      </a>
      <a href="https://twitter.com/?lang=es" class="me-4 link-secondary">
      <img src="https://www.app-apb.com/resources/img/twitter.png" style="width:25px"></i>
      </a>
      <a href="https://goo.gl/maps/g2N4KJVmgG3R82JTA" class="me-4 link-secondary">
      <img src="https://www.app-apb.com/resources/img/google-plus.png" style="width:25px"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-github"></i>
      </a>
    </div>
    
  </section>



  <section class="">
    <div class="container text-center text-md-start mt-5">
    
      <div class="row mt-3">
       
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>A Puro Bit 
          </h6>
          <p>
            Digitalizamos tu empresa y mejoramos la relacion con tus clientes.
          </p>
        </div>
    

        
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          
          <h6 class="text-uppercase fw-bold mb-4">
            Cosas que saber:
          </h6>
          <p>
            <a class="text-reset"href="https://www.app-apb.com/public/bigdata">Nuestros Servicios</a>
          </p>
          <p>
            <a  class="text-reset" href="https://www.app-apb.com/public/conocenos">Conócenos</a>
          </p>
          <p>
            <a class="text-reset" href="https://www.app-apb.com/public/info">Solicitanos información</a>
          </p>
          
        </div>
       

        
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
         
          <h6 class="text-uppercase fw-bold mb-4">
            Asociados
          </h6>
          <p>
            <a href="https://powerbi.microsoft.com/es-es/" target="_blank" class="text-reset">Power BI</a>
          </p>
          <p>
            <a href="https://www.uipath.com/es/" target="_blank" class="text-reset">UIPATH</a>
          </p>
          <p>
            <a href="https://aws.amazon.com/es/" target="_blank" class="text-reset">AWS</a>
          </p>
          <p>
            <a href="https://www.qlik.com/es-es/" target="_blank" class="text-reset">Qlikview</a>
          </p>
        </div>
        

        
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          
          <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
          <p><i class="fas fa-home me-3"></i> Coruña, 15010, ES</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@app-apb.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 34 981 44 23 01</p>
          <p><i class="fas fa-print me-3"></i> + 34 669 665 890</p>
        </div>
        
      </div>
      
    </div>
  </section>
  


  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <span class="text-reset fw-bold">Ariel Vera FCT</span>
  </div>
  
</footer>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger-cx/bootstrap.js?v=1"></script>
<df-messenger
  df-cx="true"
  location="europe-west3"
  chat-title="App-apb-chatBot"
  agent-id="c1739a67-1208-4605-bf76-8eeca5731539"
  language-code="es"
  chat-icon="https://www.app-apb.com/resources/img/chat2.png"
></df-messenger>
</body>
<script>
  function modificarChat(){
  if(!document.getElementsByClassName("chat-wrapper chat-open")){
    let elem=document.getElementsByClassName("chat-wrapper chat-open");
    elem[0].style.height = "450px";

  }
}
var intervalo = setInterval(modificarChat, 50);
</script>
</html>
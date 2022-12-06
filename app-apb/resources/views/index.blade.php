@extends('plantillaApp')

@section('content')


</br>

<div class="container text-center margenPrincipal">
<div class="navbar"><h5>QUE HACEMOS</h5></div>    
<div class="row align-items-center">
    <div class="col align-self-center">
     
      <img class="imgItem"src="https://www.app-apb.com/resources/img/bigData.webp"></img>
      <p>Digitalizamos tu negocio. Llevamos tu negocio al siguiente nivel por medio de la gestion de grandes volumenes de datos en la nube</p>
      
    </div>
    <div class="col align-self-center">
    <img class="imgItem" src="https://www.app-apb.com/resources/img/chatbot2.jpeg"></img>
    <p>Chatbot inteligente. Por medio de la inteligencia artificial y logica conversacional, ayudamos a cerrar oportunidades de venta.</p>
    </div>
    <div class="col align-self-center">
    <img class="imgItem" src="https://www.app-apb.com/resources/img/graficas2.jpeg"></img>
    <p>Analisis de datos. Utilizando analiticas graficas online conseguimos que nunca pierdas el control y vision de tus kpis.</p>
    </div>
  </div>
  </div>    
</br>
</br>
<div class="navbar container text-center"><h5>CASOS DE USO</h5></div>
<div class="container text-center textoGrande">

  <div class="row align-items-center">
  <div class="col textoGrande">
    Hemos colaborado con grandes empresas, generando importantes sinegias a traves de modelos de negocio colaborativos para la implantacion de tecnologia punta.
  </div>
    <div class="col">
    <div id="carouselCasosUso" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselCasosUso" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselCasosUso" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselCasosUso" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img src="https://www.app-apb.com/resources/img/footlooker.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="texto">Colaboracion Footlooker</h5>
        <p class="texto">Participamos en un proyecto de implementacion de analítica de datos para conseguir apuntar mejor al público objetivo.</p>
      </div>
    </div>
    <div class="carousel-item ">
      <img src="https://www.app-apb.com//resources/img/inditex.jpeg" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="texto">Colaboracion Inditex</h5>
        <p class="texto">Creacion de chatbot con inteligencia artificial para su intranet coporativa, mejorando el acceso a informacion para sus empleados.</p>
      </div>
    </div>
    <div class="carousel-item ">
      <img src="https://www.app-apb.com/resources/img/bico.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="texto">Colaboracion Bico do Xeado</h5>
        <p class="texto">Mejoramos si cifra de negocio gracias a la implementacion de modelos predictivos con graficas negocio.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselCasosUso" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselCasosUso" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    </div>
    
  </div>
</div>

</br></br>


@endsection
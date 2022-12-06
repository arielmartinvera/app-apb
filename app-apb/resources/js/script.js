

function modifyText (element){
    if(element=="1"){
    imgGRande=document.getElementById("recuadro6");
    imgGRande.src="https://www.app-apb.com/resources/img/analitica-predictiva.webp";
    textoDiapoGrande=document.getElementById("textoDiapoGrande");
    textoDiapoGrande.innerText="Realizamos un análisis de situacion para evaluar el proyecto y dirigirlo hacia donde lo necesites."
    if(window.innerWidth<800){
      textoDiapoGrande.style.fontSize="5px";
    }  
  }
    if(element=="2"){
    imgGRande=document.getElementById("recuadro6");
    imgGRande.src="https://www.app-apb.com/resources/img/volumenDatos.jpg";
    extoDiapoGrande=document.getElementById("textoDiapoGrande");
    textoDiapoGrande.innerText="Nos encargamos de gestionar toda tu informacion en el mundo digital, dispondras de ella en todo lugar."
    if(window.innerWidth<800){
      textoDiapoGrande.style.fontSize="5px";
      
    }}
    if(element=="3"){           
    imgGRande=document.getElementById("recuadro6");
    imgGRande.src="https://www.app-apb.com/resources/img/digitaliza.webp";
    extoDiapoGrande=document.getElementById("textoDiapoGrande");
    textoDiapoGrande.innerText="Transformaremos los datos dispersos que tenías en tu empresa en una unica fuente de informacion analítica."
    if(window.innerWidth<800){
      textoDiapoGrande.style.fontSize="5px";
    }}
    if(element=="4"){
     imgGRande=document.getElementById("recuadro6");
    imgGRande.src="https://www.app-apb.com/resources/img/inteligenciaArtificial.jpeg";
    extoDiapoGrande=document.getElementById("textoDiapoGrande");
    textoDiapoGrande.innerText="Crearemos modelos de datos adaptados a tus necesidades, permitiendote conocer cada detalle de tu negocio."
    if(window.innerWidth<800){
      textoDiapoGrande.style.fontSize="5px";
    }}
    if(element=="5"){
    imgGRande=document.getElementById("recuadro6");
    imgGRande.src="https://www.app-apb.com/resources/img/analisisDatos.jpg";
    extoDiapoGrande=document.getElementById("textoDiapoGrande");
    textoDiapoGrande.innerText="Utilizando modelos predictivos, reconoceremos riesgos y oportunidades potenciales para que estes un paso por delante."
    if(window.innerWidth<800){
      textoDiapoGrande.style.fontSize="5px";
    }}
  }
  imagen=document.getElementById("tdrecuadro1");
  imagen.addEventListener('click',function(){modifyText("1")});

   imagen=document.getElementById("tdrecuadro2");
  imagen.addEventListener('click',function(){modifyText("2")});

   imagen=document.getElementById("tdrecuadro3");
  imagen.addEventListener('click',function(){modifyText("3")});

   imagen=document.getElementById("tdrecuadro4");
  imagen.addEventListener('click',function(){modifyText("4")});

   imagen=document.getElementById("tdrecuadro5");
  imagen.addEventListener('click',function(){modifyText("5")});
  function cambiaTam(){
  if(window.innerWidth<800){
    textoDiapoGrande=document.getElementById("textoDiapoGrande");
    textoDiapoGrande.style.fontSize="5px";
    
    rec1.style.fontSize="5px";
    rec1.style.marginLeft="-5px";
    rec2.style.fontSize="5px";
    rec2.style.marginLeft="-5px";
    rec3.style.fontSize="5px";
    rec3.style.marginLeft="-5px";
    rec4.style.fontSize="5px";
    rec4.style.marginLeft="-5px";
    rec5.style.fontSize="5px";
    rec5.style.marginLeft="-5px";
    tex1Big.style.fontSize="8px";
    }else{

      textoDiapoGrande=document.getElementById("textoDiapoGrande");
    textoDiapoGrande.style.fontSize="18px";
    
    rec1.style.fontSize="18px";
    rec2.style.fontSize="18px";
    rec3.style.fontSize="18px";
    rec4.style.fontSize="18px";
    rec5.style.fontSize="18px";
    tex1Big.style.fontSize="15px";

    }
    
  }
    var intervalo = setInterval(cambiaTam, 50)
  
    
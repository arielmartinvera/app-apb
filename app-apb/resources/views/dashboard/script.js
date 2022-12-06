///////////////// Solicitud datos API /////////////////
var userEmail=document.getElementById("emailUser").value
//alert(userEmail);
var recibidasFranja=[];
var atendidasFranja=[];
var abandonadasFranja=[];
var previsionesFranja=[];
var atendidasTotales=0;
var abandonadasTotales=0;
var recibidasTotales=0;
var abandonadasTotales=0;
var salientesTotales=0;
var atendidasMenosVTotales=0;
var tOperativoTotal=0;
var usefulTotales=0;
var watingTotales=0;
var loginTotales=0;
var ephTotales=0;
var previsionesTotales=0;
  function crearTabla(datos){
    borrado();
console.log(datos);
    let hora=":00"
    let j=0;
for (i=8;i<=22;){
 
 if(i==Math.floor(i)){hora=":00"}else{hora=":30"}   

table=document.getElementById("table");
franja=document.createElement("td");
linea=document.createElement("tr");

franja.innerText= datos[j]["slot"];

franja.className="lFranja"
linea.appendChild(franja);

prevision=document.createElement("td");
prevision.innerText=datos[j]["recibidas"];;
prevision.className="lPrevision"
linea.appendChild(prevision);
previsionesFranja[j]=datos[j]["recibidas"];
previsionesTotales=previsionesTotales+datos[j]["recibidas"];

recibidas=document.createElement("td");
recibidas.innerText= datos[j]["recibidas"];

linea.appendChild(recibidas);
recibidasFranja[j]=datos[j]["recibidas"];
recibidasTotales=recibidasTotales+datos[j]["recibidas"];


desviacion=document.createElement("td");
desviacion.innerText=parseFloat((parseInt(datos[j]["recibidas"])/parseInt(datos[j]["recibidas"]))*100).toFixed(2)+"%";

linea.appendChild(desviacion);


atendidas=document.createElement("td");
atendidas.innerText=datos[j]["atendidas"];

linea.appendChild(atendidas);
atendidasTotales=datos[j]["atendidas"]+atendidasTotales
atendidasFranja[j]=datos[j]["atendidas"];

atendidasMenosV=document.createElement("td");
atendidasMenosV.innerText=datos[j]["atendidas_20"];;

linea.appendChild(atendidasMenosV);
atendidasMenosVTotales=datos[j]["atendidas_20"]+atendidasMenosVTotales

porcAtendidas=document.createElement("td");
porcAtendidas.innerText=parseFloat((parseInt(datos[j]["atendidas"])/parseInt(datos[j]["recibidas"]))*100).toFixed(2)+"%";

linea.appendChild(porcAtendidas);

thm=document.createElement("td");
thm.innerText=parseFloat((parseInt(datos[j]["TOp"])/parseInt(datos[j]["atendidas"]))).toFixed(0);

linea.appendChild(thm);
tOperativoTotal=parseInt(datos[j]["TOp"])+tOperativoTotal
/*----------------------------------------------------------------------------------------*/
useful=document.createElement("td");
useful.innerText=datos[j]["atendidas"];

linea.appendChild(useful);
usefulTotales=datos[j]["atendidas"]+usefulTotales

porcUseful=document.createElement("td");
porcUseful.innerText=parseFloat((parseInt(datos[j]["abandonadas"])/parseInt(datos[j]["recibidas"]))*100).toFixed(2)+"%";/*Aqui tiene que ir el useful/atendidas*/

linea.appendChild(porcUseful);


wating=document.createElement("td");
wating.innerText=(parseInt(datos[j]["espera"])/parseInt(datos[j]["atendidas"])).toFixed(2);

linea.appendChild(wating);
watingTotales=datos[j]["espera"]+watingTotales





table.appendChild(linea);
i=i+0.5;    
j++;
if(j+1>datos.length){
  

  franja=document.createElement("td");
  franja.innerText= "Totales";
  franja.className="lFranja"
  linea=document.createElement("tr");
  linea.appendChild(franja);
  
  prevision=document.createElement("td");
  prevision.innerText=previsionesTotales;
  prevision.className="lResult"
  linea.appendChild(prevision);

  recibidas=document.createElement("td");
  recibidas.innerText=recibidasTotales;
  recibidas.className="lResult"
  linea.appendChild(recibidas);

  desviacion=document.createElement("td");
  desviacion.innerText=parseFloat(((parseInt(recibidasTotales))/parseInt(previsionesTotales))*100).toFixed(2)+"%";;
  desviacion.className="lResult"
  linea.appendChild(desviacion);

  atendidas=document.createElement("td");
  atendidas.innerText=atendidasTotales;
  atendidas.className="lResult"
  linea.appendChild(atendidas);

  atendidasMenosV=document.createElement("td");
  atendidasMenosV.innerText=atendidasMenosVTotales;
  atendidasMenosV.className="lResult"
  linea.appendChild(atendidasMenosV);

  porcAtendidas=document.createElement("td");
  porcAtendidas.innerText=parseFloat(((parseInt(atendidasTotales))/parseInt(recibidasTotales))*100).toFixed(2)+"%";
  porcAtendidas.className="lResult"
  linea.appendChild(porcAtendidas);

  thm=document.createElement("td");
  thm.innerText=parseFloat(((parseInt(tOperativoTotal))/parseInt(atendidasTotales))).toFixed(0);;
  thm.className="lResult"
  linea.appendChild(thm);
  /*--------------------------------------------*/
  useful=document.createElement("td");
  useful.innerText=usefulTotales;
  useful.className="lResult"
  linea.appendChild(useful);

  porcUseful=document.createElement("td");
  porcUseful.innerText=parseFloat(((parseInt(abandonadasTotales))/parseInt(recibidasTotales))*100).toFixed(2)+"%";;
  porcUseful.className="lResult"
  linea.appendChild(porcUseful);

  wating=document.createElement("td");
  wating.innerText=watingTotales;
  wating.className="lResult"
  linea.appendChild(wating);

  
  table.appendChild(linea);

  break;}
}



///////////////////////////////
var densityCanvas = document.getElementById("graficoBarraRecibidas");
recibidasFranja.push(recibidasTotales);
previsionesFranja.push(previsionesTotales);
var barChartData = {
  labels: labels,
  datasets: [{
      label: 'Recibidas',
      backgroundColor: '#63FF84',
      //stack: 'Stack 0',
      data: recibidasFranja
  }, {
      label: 'Esperadas',
      backgroundColor:'blue',
     // stack: 'Stack 0',
      data: previsionesFranja
  }, ]

};





 
var chartOptions = {
  indexAxis: 'y',
 };

 
var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: barChartData,
  options: chartOptions
});

  ///////////////////////////
    

  var densityCanvas = document.getElementById("graficoBarraAtendidas");
  atendidasFranja.push(atendidasTotales);
  abandonadasFranja.push(abandonadasTotales);
  var barChartData = {
    labels: labels,
    datasets: [{
        label: 'Facturables',
        backgroundColor: 'red',
        stack: 'Stack 0',
        data: atendidasFranja
    }, {
        label: 'Recibidas',
        backgroundColor:'#63FF84',
        stack: 'Stack 0',
        data: recibidasFranja
    }, ]

};
 


  
 
   
  var chartOptions = {
    indexAxis: 'y',
  };
   
  var barChart = new Chart(densityCanvas, {
    type: 'bar',
    data: barChartData,
    options: chartOptions
  });


  /////////////////////////////////////

    

}
  
 
  



async function pedirDatos(){

  let cabecera= new Headers();
  let inicio = { 
      method: 'GET',
      headers: cabecera,
      mode: 'cors',
      cache: 'default'
    };
  
   
  
    /*let url="https://europe-west3-operation-datalake.cloudfunctions.net/prueba";*/
    let url="https://europe-west3-operation-datalake.cloudfunctions.net/app-apb-endpoint?userEmail="+userEmail;
    
    //let url="https://landtx.abaigroup.com:4443/EuropcarAPI/GetData?fecha=02/11/2022&idCampaña=100000041";
    const solicitud =  new Request(url, inicio);
  
    let respuesta = await fetch(solicitud);
   
    /*console.log(respuesta.status);*/
    if (respuesta.status === 200) {
    let datos = await respuesta.json();
    console.log(datos)
    crearTabla(datos);
     
     
    }else{console.log("Los datos no han podido ser recuperados" + respuesta.status);}
  
   
  
  }
 
 
//////////////////////



const labels = [
  '8:00 - 10:00',
  '10:00 - 15:00',
  '15:00 - 20:00',
  '20:00 - 22:00',
  'Totales',
  
  

  ];




    function borrado(){

      tabla=document.getElementById("table");
      
      tabla.innerText="";
      /*tabla.innerHtml='<tr><td class="lFranja">Interval</td><td class="lFranja">Forecast</td><td class="lFranja">Inbound</td><td class="lFranja">% Deviation</td><td class="lFranja">Served</td><td class="lFranja">-20s</td><td class="lFranja">%</td><td class="lFranja">TMH</td><td class="lFranja">Abandoned</td><td class="lFranja">%</td><td class="lFranja">-5s</td><td class="lFranja">Outbound</td></tr>';*/
      
      linea=document.createElement("tr");
      linea2=document.createElement("tr");
      celda=document.createElement("td");
      celda.innerText="Franja";
      celda.rowSpan="2";
      celda.className="lFranja";
      
      linea.appendChild(celda);

      celda02=document.createElement("td");
      celda02.innerText="Llamadas API";
      celda02.colSpan="2";
      celda02.className="lFranja";
      linea.appendChild(celda02);

      celda2=document.createElement("td");
      celda2.innerText="Esperadas";
      celda2.className="lFranja";
      linea2.appendChild(celda2);

      celda3=document.createElement("td");
      celda3.innerText="Recibidas";
      celda3.className="lFranja";
      linea2.appendChild(celda3);

      celda4=document.createElement("td");
      celda4.innerText="% Desviacion";
      celda4.rowSpan="2";
      celda4.className="lFranja";
      linea.appendChild(celda4);

      celda05=document.createElement("td");
      celda05.innerText="Respuestas API Facturables";
      celda05.className="lFranja";
      celda05.colSpan="6";
      linea.appendChild(celda05);

      celda5=document.createElement("td");
      celda5.innerText="Total";
      celda5.className="lFranja";
      linea2.appendChild(celda5);

      celda6=document.createElement("td");
      celda6.innerText="-20%";
      celda6.className="lFranja";
      linea2.appendChild(celda6);

      celda7=document.createElement("td");
      celda7.innerText="%";
      celda7.className="lFranja";
      linea2.appendChild(celda7);

      celda8=document.createElement("td");
      celda8.innerText="TMR";
      celda8.className="lFranja";
      linea2.appendChild(celda8);
      /*---------------------------------------*/
      celda9=document.createElement("td");
      celda9.innerText="Utilizadas";
      celda9.className="lFranja";
      linea2.appendChild(celda9);

      celda10=document.createElement("td");
      celda10.innerText="%";
      celda10.className="lFranja";
      linea2.appendChild(celda10);

      celda11=document.createElement("td");
      celda11.innerText="Espera (ms)";
      celda11.className="lFranja";
      celda11.rowSpan="2";
      linea.appendChild(celda11);

      celda12=document.createElement("td");
     
      tabla.appendChild(linea);
      tabla.appendChild(linea2);
      


    }
   

   
 

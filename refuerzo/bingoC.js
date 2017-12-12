var fin = false;
var salidos = [];
var usado = false;
var numAl= Math.floor((Math.random()*(90-1))+1);
while (fin==false){
  var introduce = prompt("Pulsa ACEPTAR para pedir bola o escribe 'FIN' para parar.");
  if (introduce=="FIN" || introduce=="Fin" || introduce=="fin") {
    fin=true;
    alert("Finalizado");
  } else {
      if(salidos.length-1==90) introduce="fin";
      else if (salidos.length==0){
        console.log(numAl);
        salidos.push[numAl];
      }
      else {
        do{
          numAl= Math.floor((Math.random()*(90-1))+1);
          for (let i=0; i<salidos.length-1; i++){
            if(salidos[i]==numAl) usado = true;
          }
        } while (usado=false);
        usado = false;
        console.log(numAl);
        salidos.push[numAl];
      }
  }
}

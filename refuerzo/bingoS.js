var fin = false;
while (fin==false){
  var numAl= Math.floor((Math.random()*(90-1))+1);
  var introduce = prompt("Pulsa ACEPTAR para pedir bola o escribe 'FIN' para parar.");
  if (introduce=="FIN" || introduce=="Fin" || introduce=="fin") fin=true;
  else console.log(numAl);
}

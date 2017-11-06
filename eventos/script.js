function mostrarMensaje(){
  if(entrada.value!=numAl){
    entradaTxt = entrada.value;
    intentos=intentos+entradaTxt;
    entradaCaja.value="";
    salidaCaja.value=intentos;
    contadorCaja.value="Llevas "+cont+" intentos.";
    cont++;
  }else {
    entradaTxt = entrada.value;
    intentos=intentos+entradaTxt;
    entradaCaja.value="ACERTADO";
    salidaCaja.value=intentos;
    contadorCaja.value="Has necesitado "+cont+" intentos";
  }

}
var entradaTxt="";
var entradaCaja = document.getElementById('entrada');
var salidaCaja = document.getElementById('salida');
var contadorCaja = document.getElementById('contador');
var cont=1;
var intentos="";

var numAl=Math.round(Math.random() * (10 - 0));
numAl=numAl.toString();
console.log(numAl);

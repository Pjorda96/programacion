function comprobar(){

  //comprobar si ha finalizado
  if(intentos>cont && barrabaja!=0){
  //pedir letra y comprobar si letra
  letra=entrada.value;
  entrada.value="";
    /*while (isNaN(letra)==false){
      letra=prompt("Introduce una letra");
    }
    */

    //colocar letra en plantilla
    for (let i=0; i<=palabra.length-1; i++){
      if (letra == palabraAcertar[i]) {
        palabra[i]=letra;
        comp=true;
      }
    }

    //comprobar si encontrada
    if (comp==true){
      console.log(letra);
    }else{
      fallo=fallo+letra;
      fallos.textContent=fallo;
      cont++;

      intentado.textContent="Llevas "+cont+" intentos.";
    }
    comp=false;

  //mostrar array
    var j="";
    for (let i=0; i<=adivinar.length-1; i++){
      j=j+palabra[i];
    }
    comprobante.value=j;

    //comprobar si se ha acertado
    barrabaja=0;
    preguntar=false;
    for (let i=0; i<=adivinar.length-1; i++){
      if(palabra[i]=="_") barrabaja=barrabaja+1;
    }
  }else {
    //solución
    if (barrabaja==0) resultado.textContent="¡¡¡ENHORABUENA!!!";
    else resultado.textContent="Mejor suerte la próxima vez";
  }
}

//Num aleatorio (0-4)
var numAl=Math.round(Math.random() * (4 - 0));
console.log(numAl);

var palabras=["fernando", "alonso", "pierde", "siempre", "seguro"]

var adivinar=palabras[numAl];
console.log(adivinar);

//contador
var intentos=5;
var cont=0;

//array de la palabra a palabraAcertar
var palabraAcertar=[];
for (let i=0; i<=adivinar.length-1;i++){
  palabraAcertar[i]=adivinar.charAt(i);
}

//array de la palabra a adivinar
var palabra=[];
for (let i=0; i<=palabraAcertar.length-1;i++){
  palabra[i]="_";
}
var barrabaja=6;  //cualquier número diferente de 0
var comp=false;
var fallo="";

var entradaLetra=document.getElementById('entrada');
var letra = "";
var fallos=document.getElementById('fallos');
var comprobante=document.getElementById('comprobante');
var intentado=document.getElementById('intentos');
var resultado=document.getElementById('resultado');

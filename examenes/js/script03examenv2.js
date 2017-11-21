//Num aleatorio (0-4)
var numAl=Math.round(Math.random() * (4 - 0));
console.log(numAl);

var palabras=["fernando", "alonso", "pierde", "siempre", "seguro"]

var adivinar=palabras[numAl];
console.log(adivinar);

//contador
//pedir el número de intentos MODIFICACIÓN 01
var intentos=prompt("Introduce el número de intentos del 5 al 10");
while(isNaN(intentos)==true || intentos>10 || intentos<5){
  intentos=prompt("Recuerda: un número del 5 al 10");
}
var cont=0;

//MODIFICACIÓN 02 y MODIFICACIÓN 03
console.log("Puedes introducir FIN en cualquier momento para terminar el juego o COMODÍN para una letra de la palabra.");

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
var final=false;  //MODIFICACIÓN 02
var comodin=15;  //MODIFICACIÓN 03 número mayor que la longitud de cualquier palabra

while(intentos>cont && barrabaja!=0){
//pedir letra y comprobar si letra
  var letra=prompt("Te quedan "+eval("intentos-cont")+" intentos");;
  while (isNaN(letra)==false){
    letra=prompt("Introduce una letra");
  }

  //opción de rendirse con FIN   MODIFICACIÓN 02
  if (letra=="FIN"){
    console.log("La palabra era: "+adivinar);
    for (let i=0; i<=adivinar.length-1;i++){
      palabra[i]=adivinar.charAt(i);
    }
    final=true;
  }

  //COMODÍN  MODIFICACIÓN 03
  if (letra=="COMODÍN"){
    do {
      comodin=Math.round(Math.random() * (adivinar.length-1));
    } while (palabra[comodin]!="_")
    letra=palabraAcertar[comodin];

    comp=true;
  }

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
    alert("Letra encontrada");
  }else{
    fallo=fallo+letra;
    console.log(fallo);
    cont++
  }
  comp=false

//mostrar array
  var j="";
  for (let i=0; i<=adivinar.length-1; i++){
    j=j+palabra[i];
    //console.log(palabra[i]);
  }
  console.log(j);

  //comprobar si se ha acertado
  barrabaja=0;
  preguntar=false;
  for (let i=0; i<=adivinar.length-1; i++){
    if(palabra[i]=="_") barrabaja=barrabaja+1;
  }
}
if (final==true) alert("Juego finalizado");   //MODIFICACIÓN 02
else {
  if (barrabaja==0) alert("¡¡ENHORABUENA!!");
  else alert("Mejor suerte la próxima vez");
}

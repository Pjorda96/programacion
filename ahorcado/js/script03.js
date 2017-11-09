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
for (let i=0; i<=palabraAcertar.length-1;i++){
  palabraAcertar[i]=adivinar.charAt(i);
}

//array de la palabra
var palabra=[];
for (let i=0; i<=palabraAcertar.length-1;i++){
  palabra[i]="_";
}
var barrabaja=6;
var comp=false;

while(intentos>cont && barrabaja!=0){
//pedir letra y comprobar si letra
  var letra=prompt("Te quedan "+eval("intentos-cont")+" intentos");;
  while (isNaN(letra)==false){
    letra=prompt("Introduce una letra");
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
  preguntar=false;
  for (let i=0; i<=adivinar.length-1; i++){
    if(palabra[i]=="_") barrabaja=barrabaja+1;
  }
}

if (barrabaja==0) alert("¡¡ENHORABUENA!!");
else alert("Mejor suerte la próxima vez");

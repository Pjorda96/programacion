//Num aleatorio (0-4)
var numAl=Math.round(Math.random() * (4 - 0));
console.log(numAl);

var palabras=["fernando", "alonso", "pierde", "siempre", "seguro"]

var adivinar=palabras[numAl];
console.log(adivinar);

//contador
var intentos=5;
var cont=1;

//array de la palabra
var palabra=[];
for (let i=0; i<=palabra.length-1;i++){
  palabra[i]="_";
}
var preguntar=true;
var comp=false;

while(intentos>cont && preguntar==true){
//pedir letra y comprobar si letra
  var letra=prompt("Introduce una letra");
  while (isNaN(letra)==false){
    letra=prompt("Introduce una letra");
  }

  //colocar letra en plantilla
  for (let i=0; i<=palabra.length-1; i++){
    if (letra == adivinar.charAt(i)) {
      palabra[i]=letra;
      comp=true;
    }
  }

  //comprobar si encontrada
  if (comp!=true){
    console.log(letra);
    alert("Letra encontrada");
  }else{
    cont++
    alert("Te quedan "+eval("intentos-cont")+" intentos");
  }
  comp=false

//mostrar array
  let j="";
  for (let i=0; i<=adivinar.length-1; i++){
    j=j+palabra[i];
  }
  console.log(j);

  //comprobar si se ha acertado
  preguntar=false;
  for (let i=0; i<=adivinar.length-1; i++){
    if(palabra[i]=="_") preguntar=true;
  }
}

alert("¡¡ENHORABUENA!!");

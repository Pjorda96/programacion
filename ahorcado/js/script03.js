//Letra aleatoria (0-4)
var numAl=Math.round(Math.random() * (4 - 0));
console.log(numAl);

var palabras=["fernando", "alonso", "pierde", "siempre", "seguro"]

var adivinar=palabras[numAl];
console.log(adivinar);

//array de la palabra
var palabra=[];
for (let i=0; i<=adivinar.length-1;i++){
  palabra[i]="";
}

//pedir letra y comprobar
var letra=prompt("Introduce una letra");
var comp=false;
for (let i=0, i<=adivinar.length-1;i++){
  if (letra == palabra[i]) {
    palabra[letra];
    comp=true;
  }  
}



/*
//convertir
var letra="";
letra=String.fromCharCode(numAl);
console.log(letra);

//pedir letra al usuario
var letraIntrod=prompt("Intenta acertar la letra");

//bucle para mostrar por pantalla el fallo
var intentos=5;
var cont=1;
while (intentos>cont && letra!=letraIntrod){
  letraIntrod=prompt("Te quedan "+eval("intentos-cont")+" intentos");
  cont++;
}
  if (letra==letraIntrod) alert("ACERTASTE");
  else alert ("No te quedan intentos");

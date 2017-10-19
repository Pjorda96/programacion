//Letra aleatoria (97-122)
var numAl=Math.round(Math.random() * (122 - 97)) + 97;
console.log(numAl);

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
  if (cont>intentos) alert ("No te quedan intentos");
  else alert("ACERTASTE");

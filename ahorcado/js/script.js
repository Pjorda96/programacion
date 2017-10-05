//Pedir a usuario introducir una letra
var pantalla=prompt("Introduce una letra");
console.log(pantalla);

//pedir letra al usuario
var letraIntrod=prompt("Intenta acertar la letra");

//bucle para mostrar por pantalla el fallo
while (pantalla!=letraIntrod){
  //pedir letra de nuevo
  letraIntrod=prompt("Prueba otra vez");
}
  alert("ACERTASTE");

console.log("funciona");

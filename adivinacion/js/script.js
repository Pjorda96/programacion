//num aleatorio entero entre 1 y 100
var numAl=Math.floor((Math.random()*100)+1);
console.log(numAl);

//pedir numero a usuario
var pantalla=0;

while (pantalla!=numAl){
  //capturar según numero
  pantalla=prompt("Introduce un número del 1 al 100");
  //alerta según el número introducido
  if (pantalla<numAl) {alert("TE QUEDASTE CORTO");}
  else if (pantalla>numAl) {alert("TE PASASTE")}
}
  alert("ACERTASTE");

console.log("funciona");

var pantalla=prompt("Introduce un entero del 2 al 6")

while (isNaN(pantalla)==true || pantalla<2 || pantalla>6){
  pantalla=prompt("Número incorrecto");
}
pantalla=parseInt(pantalla);
console.log(pantalla);

var asterisco="*"
console.log(asterisco);
for(let i=2; i<=pantalla; i++){
  asterisco=asterisco+"*";
  console.log(asterisco);
}

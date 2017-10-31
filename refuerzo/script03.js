var pantalla=prompt("Introduce un entero del 2 al 6")

while (isNaN(pantalla)==true || pantalla<2 || pantalla>6){
  pantalla=prompt("Número incorrecto");
}
pantalla=parseInt(pantalla);
console.log(pantalla);

console.log("*");
for(let i=2; i<=pantalla; i++){
  if (i==2) console.log("**");
  if (i==3) console.log("***");
  if (i==4) console.log("****");
  if (i==5) console.log("*****");
  if (i==6) console.log("******");
}

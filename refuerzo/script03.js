var pantalla=prompt("Introduce un entero del 2 al 6")

while (isNaN(pantalla)==true || pantalla<2 || pantalla>6){
  pantalla=prompt("Número incorrecto");
}
pantalla=parseInt(pantalla);
console.log(pantalla);

console.log("*");
for(let i=2; i<=pantalla; i++){
  for (let j=1; j<=i; j++){
    console.log("*");
  }
  console.log("\n");
}

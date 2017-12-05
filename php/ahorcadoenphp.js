var palabrasElegir=["urna","puig","eleccion","bruselas","dionisio"];
var numAleatorio=Math.round(Math.random(4-0)+0);
var adivinar=palabrasElegir[numAleatorio];
console.log(adivinar);

var escribir=prompt("Introduce una letra, bucanero");
while (isNaN(escribir)==false) {
  escribir=prompt("Un número no, una letra");
}
console.log(escribir);

var plantilla=[];
for (let i = 0; i < adivinar.length; i++) {
  plantilla[i]="_";
}
console.log(plantilla);

for (let i = 0; i < adivinar.length; i++) {
  if (escribir=adivinar.charAt(i)) {
    escribir=plantilla[i];
  }
}

console.log();

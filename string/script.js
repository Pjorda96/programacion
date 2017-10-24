//strings
var parrafo="Párrafo largo con un \
salto de línea \
o dos";
console.log(parrafo);

var salto="Párrafo con un \n salto de línea"
console.log(salto);

//tamaño de string
console.log(parrafo.length);

var espacios="     El trim borra los espacios    "
console.log(espacios);
console.log(espacios.length);
console.log(espacios.trim());

//sacar f de parrafo
console.log(parrafo.charAt(5));

//dar vuelta a la palabra
var palabra=prompt("Introduce una palabra");
var arbalap="";
for (let i=palabra.length-1; i>=0; i--){
  arbalap=arbalap+palabra.charAt(i);
}
console.log(arbalap);

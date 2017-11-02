//num aleatorio
var numAl=Math.round(Math.random() * (10 - 1)) + 1;
console.log(numAl);

var pant=0;
var element=document.getElementById("p1");
var element2=document.getElementById("p2");
var element3=document.getElementById("p3");
var cont=1;

pant=prompt("Introduce un número entre 1 y 10")
console.log(pant);
while(pant!=numAl){
  cont++;
  pant=prompt("Llevas "+cont+" intentos");
  console.log(pant);
}
element.textContent="Has acertado.";
element2.textContent="Has necesitado "+cont+" intentos.";
element3.textContent="El número a acertar era: "+numAl;

var pantalla=0;
console.log(pantalla>100);
while (isNaN(pantalla)=true || pantalla<=0 || pantalla>100){
  var pantalla=prompt("Introduce un número del 1 al 100");
  alert("Fuera del rango");
}
var num=parseInt(pantalla);
console.log(num);
//mostrar la tabla
for (var i=0; i<=10; i++){
  var mult=num*i;
  console.log(num+"x"+i+"= "+mult);
}

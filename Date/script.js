//Inicialización de fechas
var hoy=new Date();
//muestro el dia de hoy
console.log(hoy);
//cumleaños
var cumple=new Date(2018,5,6);
console.log(cumple);
console.log("Mi cumple es el dia "+cumple.getDate());

//dia de la semana
console.log("El cumple es el dia "+cumple.getDay());
switch (cumple.getDay()){
  case 0:
  console.log("Domingo");
  break;
  case 1:
  console.log("Lunes");
  break;
  case 2:
  console.log("Martes");
  break;
  case 3:
  console.log("Miércoles");
  break;
  case 4:
  console.log("Jueves");
  break;
  case 5:
  console.log("Viernes");
  break;
  case 6:
  console.log("Sábado");
  break;
  default:
  alert("Esto va a petar");
  break;
}

cumple.setFullYear(2019);
switch (cumple.getDay()){
  case 0:
  console.log("Domingo");
  break;
  case 1:
  console.log("Lunes");
  break;
  case 2:
  console.log("Martes");
  break;
  case 3:
  console.log("Miércoles");
  break;
  case 4:
  console.log("Jueves");
  break;
  case 5:
  console.log("Viernes");
  break;
  case 6:
  console.log("Sábado");
  break;
  default:
  alert("Esto va a petar");
  break;
}

console.log("here's Johny");

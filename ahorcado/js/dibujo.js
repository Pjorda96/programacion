var dibujo=0;
var lineas=[];


for (let i=0; i<=9; i++){
  lineas[i]="";
}

while(dibujo<=9){
  var introd=prompt("Introdice en orden los números del 1 al 9");

  switch(dibujo){
    case 1:
    lineas[9]="_ ____    ";

    break;

    case 2:
    lineas[2]=" |        ";
    lineas[3]=" |        ";
    lineas[4]=" |        ";
    lineas[5]=" |        ";
    lineas[6]=" |        ";
    lineas[7]=" |        ";
    lineas[8]=" |        ";
    break;

    case 3:
    lineas[1]=" ________ ";
    break;

    case 4:
    lineas[2]=" |      | ";
    lineas[3]=" |      O ";
    break;

    case 5:
    lineas[4]=" |      | ";
    break;

    case 6:
    lineas[4]=" |     /| ";
    break;

    case 7:
    lineas[4]=" |     /|\ ";
    break;

    case 8:
    lineas[5]=" |     /  ";
    break;

    case 9:
    lineas[5]=" |     / \ ";
    break;

    default:
    console.log("Eres un genio");
  }

  for (let i=1; i<=9; i++){
    console.log(lineas[i]);
  }
}

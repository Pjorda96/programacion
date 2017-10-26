var num1=prompt("Introduce el primer número");
var num2=prompt("Introduce el segundo número");

do {
  if (num1==num2) {
    num2=prompt("Cambia el segundo número");
    if (num1!=num2 && num1%2==0 && num2%2==0) alert("Enorabuena");
  }
  else {
    if (num1%2!=0 || num2%2!=0) {
      if (num1%2!=0) num1=prompt("Cambia el primer número para que sea par");
      if (num2%2!=0) num2=prompt("Cambia el segundo número para que sea par");
      if (num1!=num2 && num1%2==0 && num2%2==0) alert("Enorabuena");
    }
  }
} while (num1==num2 || num1%2!=0 || num2%2!=0);

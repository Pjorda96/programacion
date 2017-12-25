function bola(){
  if (cantarBingo==true) num.value="Ya han cantado bingo";
  else {
    do{
      numAl= Math.floor((Math.random()*(90-1))+1);
      if (numerosAparecidos.length-1==89) alert("Han aparecido todos los números");
      if (numerosAparecidos.length-1>=1){
        for (let i=0; i<=numeros.length-1; i++){
          if (numeros[i]==numAl) repetido=true;
        }
        recuento=recuento+", "+numAl;
      } else recuento=numAl;
    } while (repetido==true)
    num.value=numAl;
    numerosAparecidos.push(numAl);
    repetido=false;
  }
}

function recontar(){
  numeros.value=recuento;
  cantarBingo=true;
}

var num = document.getElementById('bola');
var numeros = document.getElementById('numeros');
var numAl=0;
var numerosAparecidos=[];
var recuento="";
var repetido=false;
var cantarBingo=false;

var pantalla=prompt("Introduce un número de dos cifras");
var decenas="";
var unidades="";

if (pantalla<16 && pantalla>=11){
  if (pantalla==11){decenas="Once";}
  else if (pantalla==12){decenas="Doce";}
  else if (pantalla==13){decenas="Trece";}
  else if (pantalla==14){decenas="Catorce";}
  else if (pantalla==15){decenas="Quince";}
}else if (pantalla%10==0){
  if (pantalla/10<2 && pantalla/10>=1){decenas="Diez";}
  else if(pantalla/10==2){decenas="Veinte";}
  else if(pantalla/10==3){decenas="Trenta";}
  else if(pantalla/10==4){decenas="Cuarenta";}
  else if(pantalla/10==5){decenas="Cincuenta";}
  else if(pantalla/10==6){decenas="Sesenta";}
  else if(pantalla/10==7){decenas="Setenta";}
  else if(pantalla/10==8){decenas="Ochenta";}
  else if(pantalla/10==9){decenas="Noventa";}
}else if (pantalla%10>0){
  if (pantalla>10 && pantalla<20){decenas="Dieci";}
  else if(pantalla>20 && pantalla<30){decenas="Veinti";}
  else if(pantalla>30 && pantalla<40){decenas="Trenta y ";}
  else if(pantalla>40 && pantalla<50){decenas="Cuarenta y ";}
  else if(pantalla>50 && pantalla<60){decenas="Cincuenta y ";}
  else if(pantalla>60 && pantalla<70){decenas="Sesenta y ";}
  else if(pantalla>70 && pantalla<80){decenas="Setenta y ";}
  else if(pantalla>80 && pantalla<90){decenas="Ochenta y ";}
  else if(pantalla>90 && pantalla<100){decenas="Noventa y ";}

  if (pantalla%10==1){unidades="uno";}
  else if(pantalla%10==2){unidades="dos";}
  else if(pantalla%10==3){unidades="trés";}
  else if(pantalla%10==4){unidades="cuatro";}
  else if(pantalla%10==5){unidades="cinco";}
  else if(pantalla%10==6){unidades="seis";}
  else if(pantalla%10==7){unidades="siete";}
  else if(pantalla%10==8){unidades="ocho";}
  else if(pantalla%10==9){unidades="nueve";}
}
console.log(decenas+unidades);

var pal=prompt("Introduce una palabra corta");
var palabra=prompt("Introduce una palabra larga");


while (pal==palabra || pal.length >=palabra.length){
  if (pal==palabra) palabra=prompt("Introduce otra palabra");
  else if (pal.length >=palabra.length) {
    palabra=prompt("La palabra tiene que ser más larga que la primera");
  }
}

alert("¿Todo bien?, ¿todo correcto?. ¡¡¡¡Y yo que me alegro!!!!");

<?php
require "padre/heroes/Gabo.php";
require "padre/villanos/Josep.php";

$primerHeroe= new Gabo("Primero");
$primerVillano= new Josep();
$primerHeroe->restarVida(10);
$hordadeGabos=[];
for ($i=0;$i<=10;$i++){
  $hordadeGabos[]=new Gabo("Gabo".$i);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo Herencia</title>
  </head>
  <body>
    <?php
      echo $primerHeroe->getNombre()." tiene " .$primerHeroe->getVida(). " de vida.<br>";
      echo $primerVillano->getNombre()." tiene " .$primerVillano->getVida(). " de vida.<br>";
    ?>
  </body>
</html>

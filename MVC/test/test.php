<?php
require "../model/Db.php";
//Creamos conexion
$primeraConexion=new Db("localhost","root","root","world");
$primeraConexion->conexion();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba de clase DB</title>
  </head>
  <body>
    <?php var_dump($primeraConexion->getConector()); ?>
  </body>
</html>

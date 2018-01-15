<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chorrada paises</title>
  </head>
  <body>
    <?php
    $conector=new mysqli("localhost","root","","world");
    if ($conector->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $conector->connect_error;
    } else {
      //interactuar con la base de datos
    }
    ?>
    <h1>Paises del mundo</h1>
    <?php

    ?>
  </body>
</html>

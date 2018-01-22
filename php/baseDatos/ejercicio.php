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
      echo "<h1>Paises del mundo</h1>";
      $resultado = $conector->query("SELECT * FROM country");
      echo "El numero de paises es: ".$resultado->num_rows."<br>";
  	  while($fila=$resultado->fetch_assoc()){
    	  echo "El nombre es ".$fila['Name']."<br>";
  	  }
      echo "<h2>Con foreach()</h2>";
      foreach ($resultado as $fila) {
        echo "El nombre es ".$fila['Name']."<br>";
      }
    }
    ?>
    <?php

    ?>
  </body>
</html>

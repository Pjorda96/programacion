<?php
require_once 'config.php';
require_once 'conexion.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Include RETO</title>
  </head>
  <body>
    <h1>Paises de SudAmérica</h1>
    <?php
    if($resultado->num_rows>0){
      echo "<ol>";
      foreach ($resultado as $pais){
        $paisNombre=$pais['Name'];
        $region=$pais['Region'];
        echo "<li>$paisNombre, $region</li>";
      }
      echo "</ol>";
    }
    ?>
  </body>
</html>

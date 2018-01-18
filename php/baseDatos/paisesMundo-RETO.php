<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Paises del mundo</title>
    <style>
      * {
        box-sizing: border-box;
      }
      ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
      }

      li {
          float: left;
      }

      li a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
      }

      li a:hover:not(.active) {
          background-color: #111;
      }
    </style>
  </head>
  <body>
    <?php $pantalla="superficie";
    ?>
    <ul>
      <li><a class="<?php if ($pantalla=="superficie") echo "active";?>" href="paisesMundo-RETO.php">Superficie</a></li>
      <li><a class="<?php if ($pantalla=="jap") echo "active";?>" href="paisesMundo-RETO-2.php">Japón</a></li>
    </ul>
    <?php
    $world=new mysqli("localhost","root","","world");
    if ($world->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $world->connect_error;
    } else {
      //interactuar con la base de datos
      echo "<h1>Paises del mundo</h1>";
      echo "<h3>Ordenados por Superficie</h3>";
      $resultado = $world->query("select Name,SurfaceArea from country order by SurfaceArea desc");
      foreach ($resultado as $fila) {
      ?>
        <div>
          <?=$fila['Name'];?>
        </div>
        <div>
          <?=$fila['SurfaceArea'];?>
        </div>
      <?php } ?>
    }
  </body>
</html>

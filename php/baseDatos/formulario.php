<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
  </head>
  <body>
    <h1>Práctica de formulario</h1>
    <?php
    $world=new mysqli("localhost","root","","world");
    if ($world->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $world->connect_error;
    } else {
      echo "Conectado a la DB"."<br>";
      $resultado = $world->query("select Name from country where code='".$_GET["code"]."'");
      foreach ($resultado as $fila) {
        echo "El pais buscado es: ".$fila['Name'];
      }
    }
    ?>
  </body>
</html>

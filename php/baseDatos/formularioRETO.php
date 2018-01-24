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
      if (empty($_POST['SurfaceArea'])) $_POST['SurfaceArea']='0';
      if ($_POST['Continent']=="") {
        $resultado = $world->query("select Name from country where SurfaceArea>'".$_POST['SurfaceArea']."'");
        foreach ($resultado as $fila) {
          echo "Un pais de esas características es: ".$fila['Name']."<br>";
        }
      } else {
        $resultado = $world->query("select Name from country where Continent='".$_POST['Continent']."' and SurfaceArea>'".$_POST['SurfaceArea']."'");
        foreach ($resultado as $fila) {
          echo "Un pais de esas características es: ".$fila['Name']."<br>";
        }
      }
    }
    ?>
    <button type="button" onclick="location.href='enviarFormRETO.php'">Volver</button>
  </body>
</html>

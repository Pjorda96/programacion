<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Evento;

//Creamos un nevo objeto de para la insercion de datos contra la tabla evento
$evento = new Evento();

//insertamos un nuevo Registro
if (!isset($_POST["nombre"]) || $_POST["nombre"]==""){
    $correcto=false;
}elseif (!isset($_POST["edad"]) || $_POST["edad"]==0){
    $correcto=false;
}elseif ((isset($_POST["nombre"])) && (isset($_POST["nombre"]))){
    $correcto=true;
    $evento->nuevoRegistro($_POST["nombre"],$_POST["edad"]);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Entrada Evento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body style="padding:10px">
      <div class="w3-row">
        <div class="w3-col w3-container" style="width:30%"></div>
        <div class="w3-col w3-card-4" style="width:40%">
          <header class="w3-container w3-blue">
            <h2>Registrado</h2>
          </header>
          <div class="w3-container">
            <?php
              if ($correcto==true){
                  echo "<p>Nuevo registro realizado</p>";
              }else{
                  echo "<p>El nombre o la edad no se han rellenado<p>";
              }
            ?>
          </div>
        </div>
        <div class="w3-col w3-container" style="width:30%"></div>
      </div>
      <button type="button" name="button" onclick="location.href='index.php'">Volver</button>
  </body>
</html>

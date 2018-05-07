<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Juego;

$baseDatos=new Juego();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/perfilUsuario.css">
  </head>
  <body>
    <h1>CREAR JUEGO</h1>
    <form method="post" action="listadoUsuarios-ex.php" onsubmit="return espaciosVacios()">
      <fieldset class="caja">
        <p>Nombre <b>*</b><br>
        <input type="text" name="nombre" value="" placeholder="Introduce el nombre" required></p>
        <p>Edad: <br>
        <input type="text" name="edad" placeholder="Introduce la edad"></p>
      </fieldset>
      <input type="submit" name="crear" value="Crear juego">
    </form>
    <button type="button" name="button" onclick="location.href='listadoUsuarios-ex.php'">Volver</button>
    <script type="text/javascript" src="js/comprobarInsertar.js" charset="utf-8"></script>
  </body>
</html>

<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Usuario;
use Daw\models\Session;

$baseDatos=new Usuario();

$sesion= new Session();
if (!isset($_SESSION['user'])) {
  $_SESSION['user'] = "";
  //print_r($_SESSION);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de Usuarios</title>
    <link rel="stylesheet" href="css/perfilUsuario.css">
  </head>
  <body>
    <h1>BIENVENIDO AL AHORCADO</h1>
    <br><br>
      <!--formulario para elegir usuario existente-->
      <fielset>
        <legend>Selecciona tu usuario.</legend>
        <form class="form" action="ahorcado.php" method="post" name="form">
          <select class="" name="usuario">
            <option value="">--Selecciona uno--</option>
            <?php
            $baseDatos->lista();
            ?>
          </select>
          <input type="submit" name="empezar" value="Empezar"></input>
        </form>
      </fielset>
  </body>
</html>

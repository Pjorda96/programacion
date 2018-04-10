<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;

$baseDatos=new Db();
$baseDatos->conectar();

if (isset($_POST["borrar"])){
  $baseDatos->borrarUsuario($_POST["nombre"]);
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

        <legend>Borrar usuario.</legend>
        <form class="user" method="post" action="listadoUsuarios-08.php" >
          <select class="" name="usuario">
            <option value="">--Selecciona uno--</option>
            <?php
            $baseDatos->lista();
            ?>
          </select>
          <input type="submit" name="borrar" value="Borrar"></input>
        </form>

  </body>
</html>

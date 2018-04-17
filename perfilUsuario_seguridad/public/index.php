<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Session;

$baseDatos=new Db();
$baseDatos->conectar();

$sesion= new Session();
if (!isset($_SESSION['user'])) {
  $_SESSION['user'] = "no";
} else if (isset($_POST['empezar'])) {
  if ($_POST['usuario']=="admin"){
    header('Location: listadoUsuarios-09.php');
  }//else {
    //header('Location: ahorcado.php/?usuario='.$_GET["usuario"]);
  //}
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
        <form class="form" action="" method="post" name="form">
          <select class="" name="usuario">
            <option value="">--Selecciona uno--</option>;
            <?php
            $baseDatos->lista();
            ?>
          </select>
          <input type="submit" name="empezar" value="Empezar"></input>
        </form>
      </fielset>
  </body>
</html>
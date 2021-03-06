<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Usuario;
use Daw\models\Session;

$baseDatos=new Usuario();

session_start();
if ($_SESSION['usuario']!="admin"){
    //print_r($_SESSION);
    header('Location: cerrado.php');
}

if (isset($_POST["borrar"])){
  $baseDatos->borrarUsuario($_POST["usuario"]);
}
if (isset($_POST["modificar"])){
  $baseDatos->actualizarUsuario($_POST["usuario"],$_POST["nombre"],$_POST["apellidos"],$_POST["edad"],$_POST["curso"]);
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
    <h1>PANEL DE ADMINISTRADOR</h1>
    <br><br>
      <!--borrar usuario-->
      <fielset>
        <legend>Borrar usuario.</legend>
        <form class="user" method="post" action="" >
          <select class="" name="usuario">
            <option value="">--Selecciona uno--</option>
            <?php
            $baseDatos->lista();
            ?>
          </select>
          <input type="submit" name="borrar" value="Borrar"></input>
        </form>
      </fielset>
    <br><br>
      <!--modificar usuario-->
      <fielset>
        <legend>Modificar usuario.</legend>
        <form class="user" action="actualizarUsuario.php" method="post">
          <select class="" name="usuario">
            <option value="">--Selecciona uno--</option>;
            <?php
            $baseDatos->lista();
            ?>
          </select>
          <input type="submit" value="Modificar"></input>
        </form>
      </fielset>
      <br><br>
      <button type="button" name="logout" onclick="location.href='cerrado.php'" >Log out</button>
  </body>
</html>

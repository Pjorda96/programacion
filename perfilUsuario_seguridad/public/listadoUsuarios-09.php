<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Session;

$baseDatos=new Db();
$baseDatos->conectar();

$sesion= new Session();

if (isset($_POST["crear"])){
  $baseDatos->insertarUsuario($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['curso'],$_POST['usuario'],$_POST['contrasenya']);
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
      <!--nuevo usuario-->
      <fielset>
        <legend>Crear nuevo usuario.</legend>
        <button type="button" name="button" onclick="location.href='insertarUsuario-09.php'">Crear nuevo usuario</button>
      </fielset>
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
        <form class="user" action="actualizarUsuario-09.php" method="post">
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
      <button type="button" name="logout" onclick="<?=$sesion->cerrarSesion(); ?>">Log out</button>
  </body>
</html>

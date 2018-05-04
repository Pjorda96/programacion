<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Usuario;

$baseDatos=new Usuario();
$baseDatos->conectar();

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
          <input type="submit" value="Empezar"></input>
          <!--onclick="form.action = 'ahorcado.php'; return true;"
          <input type="submit" value="Modificar" onclick="form.action = 'actualizarUsuario.php'; return true;"></input>
          <input type="submit" value="Borrar" onclick="form.action = 'borrarUsuario.php'; return true;"></input>-->
        </form>
      </fielset>
    <br><br>
      <!--nuevo usuario-->
      <fielset>
        <legend>Crear nuevo usuario.</legend>
        <button type="button" name="button" onclick="location.href='insertarUsuario-ex.php'">Crear nuevo usuario</button>
      </fielset>
    <br><br>
      <!--borrar usuario-->
      <fielset>
        <legend>Borrar usuario.</legend>
        <form class="user" method="post" action="" onsubmit="borrado()">
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
        <form class="user" action="actualizarUsuario-ex.php" method="post">
          <select class="" name="usuario">
            <option value="">--Selecciona uno--</option>;
            <?php
            $baseDatos->lista();
            ?>
          </select>
          <input type="submit" value="Modificar"></input>
        </form>
      </fielset>
    <script type="text/javascript" src="js/comprobarBorrar.js" charset="utf-8"></script>
  </body>
</html>

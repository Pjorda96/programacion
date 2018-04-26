<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Usuario;

$login = new Usuario();
if (isset($_POST["empezar"])) {
    $login->validate($_POST["usuario"],$_POST["contrasenya"]);
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
        <form class="form" action="" onsubmit="return comprobarLogin()" method="post" name="form">
          <p>Iniciar sesión como
           <br><br>
          <input type="text" name="usuario" id="usuario" placeholder="Usuario:">
          <input type="password" name="contrasenya" id="contrasenya" placeholder="Contraseña:">
          <input type="submit" name="empezar" value="Empezar"></input>
        </form>
        <br><br>
        <!--nuevo usuario-->
        <fielset>
            <legend>Crear nuevo usuario.</legend>
            <button type="button" name="button" onclick="location.href='insertarUsuario.php'">Crear nuevo usuario</button>
        </fielset>
      </fielset>
    <script src="js/login.js" charset="utf-8"></script>
  </body>
</html>
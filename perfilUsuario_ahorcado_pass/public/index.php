<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Login;

$login = new Login();
if (isset($_POST["empezar"])) {
    if ($_POST['rememberMe']=="rememberMe"){
        $usuario=$_POST["usuario"];
        $contrasenya=$_POST["contrasenya"];
        setcookie("user","$usuario",time()+3600);
        setcookie("pass","$contrasenya",time()+3600);
    }
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
          <input type="text" name="usuario" id="usuario" placeholder="Usuario:" value="<?php if(!empty($_COOKIE['usuario']))echo $_COOKIE['usuario']; ?>">
          <input type="password" name="contrasenya" id="contrasenya" placeholder="Contraseña:" value="<?php if(!empty($_COOKIE['contrasenya']))echo $_COOKIE['contrasenya']; ?>"><br>
          <input type="checkbox" name="rememberMe" value="rememberMe" <?php if (!empty($_COOKIE['usuario']) && !empty($_COOKIE['contrasenya'])) { echo "checked='checked'"; } ?>>Recordarme</input>
          <input type="submit" name="empezar" value="Empezar"></input>
          </p>
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
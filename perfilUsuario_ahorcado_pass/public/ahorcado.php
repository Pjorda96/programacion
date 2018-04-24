<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Usuario;
use Daw\models\Session;

$baseDatos=new Usuario();

session_start();
if (isset($_POST['empezar'])) {
    if ($_POST['usuario']==="admin"){
        $_SESSION['usuario']="admin";
        header('Location: listadoUsuarios.php');
    }else {
        $_SESSION['user'] = $_POST['usuario'];
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ahorcado</title>
    <link rel="stylesheet" href="css/perfilUsuario.css">
  </head>
  <body>
    <h1>Bienvenido al ahorcado</h1>
    <form id="formularioPrueba" action="#" method="post">
      <div><p id="dibu" value=""></p></div>
      <div>Introduce una letra: <br>
      <input type="text"  size=4 id="entrada" value="">
      <input type="text" id="comprobante" value="" readonly> </div>
      <div><p id="fallos" value=""></p>
      <p id="intentos" value=""></p>
      <p id="resultado" value=""></p></div>
      <p><button type="button" name="Comprobar" onclick="comprobar()">Comprobar</button></p>
    </form>
    <button type="button" name="logout" onclick="location.href='cerrado.php'" >Log out</button>
    <script type="text/javascript" src=js/scriptAhorcado.js></script>
  </body>
</html>

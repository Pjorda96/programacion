<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar</title>
    <link rel="stylesheet" href="perfilUsuario.css">
  </head>
  <body>
    <h1>MODIFICAR USUARIO</h1>
    <form class="" action="index.html" method="post">
      <fieldset>
        <?php
        $juegos=new mysqli("localhost","root","","juegos");
        if ($juegos->connect_errno) {
          echo "Fallo al conectar a MySQL: " . $juegos->connect_error;
        } else {
          $borrar="delete from usuarios where usuario='".$_POST['usuario']."';";
          $registro = $juegos->query($borrar);
        }
        ?>

      </fieldset>
    </form>
  </body>
</html>

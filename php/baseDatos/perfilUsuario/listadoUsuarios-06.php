<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de Usuarios</title>
    <link rel="stylesheet" href="perfilUsuario.css">
  </head>
  <body>
    <h1>BIENVENIDO AL AHORCADO</h1>
    <br><br>
      <!--formulario para elegir usuario existente-->
      <fielset>
        <legend>Selecciona tu usuario.</legend>
        <form class="form" action="" method="post" name="form">
          <select class="" name="usuario">
            <?php
            $juegos=new mysqli("localhost","root","","juegos");
            if ($juegos->connect_errno) {
              echo "Fallo al conectar a MySQL: " . $juegos->connect_error;
            } else {
              ?>
              <option value="">--Selecciona uno--</option>
              <?php
              //interactuar con la base de datos
              $usuarios="select usuario from usuarios";
              $resultado = $juegos->query($usuarios);
              foreach ($resultado as $fila) {
                ?>
                <option value="<?=$fila['usuario']?>"><?=$fila['usuario']?></option>
                <?php
              }
            }
            ?>
          </select><br>
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
        <button type="button" name="button" onclick="location.href='insertarUsuario-06.php'">Crear nuevo usuario</button>
      </fielset>
    <br><br>
      <!--borrar usuario-->
      <fielset>
        <legend>Borrar usuario.</legend>
        <form class="user" action="borrarUsuario-06.php" method="post">
          <select class="" name="usuario">
            <?php
            $juegos=new mysqli("localhost","root","","juegos");
            if ($juegos->connect_errno) {
              echo "Fallo al conectar a MySQL: " . $juegos->connect_error;
            } else {
              ?>
              <option value="">--Selecciona uno--</option>
              <?php
              $resultado = $juegos->query($usuarios);
              foreach ($resultado as $fila):?>
                <option value="<?=$fila['usuario']?>"><?=$fila['usuario']?></option>
              <?php endforeach;
            }
            ?>
          </select>
          <input type="submit" value="Borrar"></input>
        </form>
      </fielset>
    <br><br>
      <!--modificar usuario-->
      <fielset>
        <legend>Modificar usuario.</legend>
        <button type="button" name="button" onclick="location.href='actualizarUsuario-06.php'">Modificar</button>
      </fielset>
  </body>
</html>

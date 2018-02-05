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
    <div>
      <!--formulario para elegir usuario existente-->
      <fielset class="seleccionar">
        <legend>Selecciona tu usuario.</legend>
        <form class="user" action="ahorcado.php" method="post">
          <select class="" name="">
            <?php
            $juegos=new mysqli("localhost","root","","juegos");
            if ($juegos->connect_errno) {
              echo "Fallo al conectar a MySQL: " . $juegos->connect_error;
            } else {
              ?>
              <option value="">--Selecciona uno--</option>
              <?php
              //interactuar con la base de datos
              $resultado = $juegos->query("select usuario from usuarios");
              foreach ($resultado as $fila) {
                ?>
                <option value="<?=$fila['usuario']?>"><?=$fila['usuario']?></option>
                <?php
              }
            }
            ?>
          </select>
          <input type="submit" value="Empezar"></input>
        </form>
      </fielset>

      <!--nuevo usuario-->
      <fielset class="crear">
        <legend>Crear nuevo usuario.</legend>
        <button type="button" name="button" onclick="location.href='insertarUsuario-06.php'">Crear nuevo usuario</button>
      </fielset>
    </div>
    <br><br>
    <div>
      <!--modificar usuario-->
      <fielset class="crear">
        <legend>Modificar usuario.</legend>
        <button type="button" name="button" onclick="location.href='actualizarUsuario-06.php'">Modificar</button>
      </fielset>

      <!--borrar usuario-->
      <fielset class="crear">
        <legend>Borrar usuario.</legend>
        <button type="button" name="button" onclick="location.href='borrarUsuario-06.php'">Borrar usuario</button>
      </fielset>
    </div>
  </body>
</html>

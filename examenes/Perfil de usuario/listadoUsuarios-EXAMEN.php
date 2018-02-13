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
              //MODIFICACIÓN 2
              $resultado = $juegos->query("select id, usuario, correo, nombre from usuarios");
              foreach ($resultado as $fila) {
                ?>
                <option value="<?=$fila['usuario']?>"><?=$fila['usuario']?>, <?=$fila['nombre']?>, <?=$fila['correo']?></option>
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
        <button type="button" name="button" onclick="location.href='insertarUsuario-EXAMEN.php'">Crear nuevo usuario</button>
      </fielset>

      <!--MODIFICACIÓN 3-->
      <fielset class="muestra">
        <legend>Mostrar usuario</legend>
          <table>
            <?php
            $juegos=new mysqli("localhost","root","","juegos");
            if ($juegos->connect_errno) {
              echo "Fallo al conectar a MySQL: " . $juegos->connect_error;
            } else {
              //MODIFICACIÓN 2
              $resultado = $juegos->query("select id, usuario, correo, nombre from usuarios");
              foreach ($resultado as $fila):?>
              <tr>
                <td><button type="button" name="button" onclick="location.href='muestraUsuario.php?id=<?=$fila['id']?>'">
                  <?=$fila['usuario']?>, <?=$fila['nombre']?>, <?=$fila['correo']?></button></td>
              </tr>
                <?php
              endforeach;
            }
            ?>
          </table>
      </fielset>
    </div>
  </body>
</html>

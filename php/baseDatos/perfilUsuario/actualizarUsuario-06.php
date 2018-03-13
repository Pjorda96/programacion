<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar</title>
    <link rel="stylesheet" href="perfilUsuario.css">
  </head>
  <body>
    <h1>MODIFICAR USUARIO</h1>
    <form class="" action="actualizarUsuarioPOST-06.php" method="post">
      <fieldset>
        <?php
        $juegos=new mysqli("localhost","root","","juegos");
        if ($juegos->connect_errno) {
          echo "Fallo al conectar a MySQL: " . $juegos->connect_error;
        } else {
          $consulta="select nombre,apellidos,usuario,edad,curso from usuarios where usuario='".$_POST['usuario']."'";
          //echo $consulta;
          $consultaUsuario = $juegos->query($consulta);

          foreach ($consultaUsuario as $fila) {
            $usuarioQ=$_POST['usuario'];
            $nombreQ=$fila['nombre'];
            $apellidosQ=$fila['apellidos'];
            $edadQ=$fila['edad'];
            $cursoQ=$fila['curso'];
          }

          $actualizar="update from usuarios where usuario='".$_POST['usuario']."' ;";
          $registro = $juegos->query($actualizar);
        }
        ?>
        <p>Nombre de usuario <b>*</b><br>
          <input type="text" name="usuario" value="<?=$usuarioQ?>" readonly></p>
        <fieldset class="caja">
          <legend>¿QUIEN ERES?</legend>
          <p>Nombre <b>*</b><br>
          <input type="text" name="nombre" value="<?=$nombreQ?>" required></p>
          <p>Apellidos <br>
            <input type="text" name="apellidos" value="<?=$apellidosQ?>" required></p>
          <p>Año de nacimiento: <br>
          <input type="text" name="edad" value="<?=$edadQ?>" required></p>
          <p>Curso <br>
            <select name="curso" required>
              <option value="<?=$cursoQ?>"><?=$cursoQ?></option>
              <option value="2daw">2º DAW</option>
              <option value="1daw">1º DAW</option>
              <option value="bachiller">Bachiller</option>
              <option value="eso">ESO</option>
              <option value="primaria">Primaria</option>
            </select></p>
        </fieldset>
        <input type="submit" class="actualizar" name="actualizar" value="Actualizar">
      </fieldset>
    </form>
    <button type="button" name="button" onclick="location.href='listadoUsuarios-06.php'">Volver</button>
  </body>
</html>

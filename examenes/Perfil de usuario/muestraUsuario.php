<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mostrar Usuario</title>
    <link rel="stylesheet" href="perfilUsuario.css">
  </head>
  <body>
    <table>
      <tr>
        <th>Nombre</th><th>Apellidos</th><th>Usuario</th><th>Año de nacimiento</th><th>Curso</th><th>Puntuación</th><th>Correo</th>
      </tr>
      <?php
      $juegos=new mysqli("localhost","root","","juegos");
      if ($juegos->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $juegos->connect_error;
      } else {
        $consulta="select nombre,apellidos,usuario,edad,curso,puntuacion,correo from usuarios where id='".$_GET['id']."'";
        //echo $consulta;
        $resultado = $juegos->query($consulta);
        foreach ($resultado as $fila):?>
          <tr>
            <td><?=$fila['nombre']?></td>
            <td><?=$fila['apellidos']?></td>
            <td><?=$fila['usuario']?></td>
            <td><?=$fila['edad']?></td>
            <td><?=$fila['curso']?></td>
            <td><?=$fila['puntuacion']?></td>
            <td><?=$fila['correo']?></td>
          </tr>
          <?php
        endforeach;
      }
      ?>
    </table>
    <button type="button" name="button" onclick="location.href='listadoUsuarios-EXAMEN.php'">Volver</button>
  </body>
</html>

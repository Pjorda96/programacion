<?php
if (empty($_POST["apellidos"])) $_POST["apellidos"]="";
if (empty($_POST["date"])) $_POST["date"]=2018;
if (empty($_POST["contrasenya"])) $_POST["contrasenya"]="";
if (empty($_POST["curso"])) $_POST["curso"]="";

$juegos=new mysqli("localhost","root","","juegos");
if ($registro->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $juegos->connect_error;
} else {
  $registro = $juegos->query("use juegos; insert into usuarios
  (nombre,apellidos,usuario,contrasenya,edad,curso)
  values ('".$_POST['nombre']."','".$_POST['apellidos']."',
  '".$_POST['usuario']."','".$_POST['contrasenya']."',".$_POST['edad'].",
  '".$_POST['curso']."')");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="perfilUsuario.css">
  </head>
  <body>
    <h1>CREAR PERFIL</h1>
    <form action="listadoUsuarios.php" method="post">
      <fieldset class="caja">
        <legend>¿QUIEN ERES?</legend>
        <p>Nombre <b>*</b><br>
        <input type="text" name="nombre" value="" placeholder="Introduce tu nombre"></p>
        <p>Apellidos <br>
          <input type="text" name="apellidos" value="" placeholder="Introduce tus apellidos"></p>
        <p>Fecha de nacimiento: <br>
        <input type="date" name="date"></p>
        <p>Curso <br>
          <select name="curso" placeholder="Introduce tu curso">
            <option value="">--Selecciona uno--</option>
            <option value="2daw">2º DAW</option>
            <option value="1daw">1º DAW</option>
            <option value="bachiller">Bachiller</option>
            <option value="eso">ESO</option>
            <option value="primaria">Primaria</option>
          </select></p>
      </fieldset>
      <fieldset class="caja">
        <legend>¿CÓMO QUIERES INICIAR SESIÓN?</legend>
        <p>Nombre de usuario <b>*</b><br>
          <input type="text" name="usuario" value="" placeholder="Introduce tu usuario"></p>
        <p>Contraseña <br>
          <input type="password" name="contrasenya" value="" placeholder="Introduce tu contraseña"></p>
        <p>Repite la contraseña <br>
          <input type="password" name="contrasenya2" value="" placeholder="Introduce tu contraseña"></p>
      </fieldset>
      <fieldset class="caja">
        <legend>¿CONDICIONES DE REGISTRO?</legend>
        <p>Me va a gustar este juego <br>
        <input type="radio" name="gusto" value="si">¡¡Por supuesto!!
        <input type="radio" name="gusto" value="regular">Al principio no pero me voy a enganchar
        <input type="radio" name="gusto" value="si">Claro, es un clásico atemporal que [bla bla bla] y me va a encantar.</p>
        <p><input type="checkbox" name="acuerdo" value="ok">Acepto jugar sin trampas e intentar mejorar dia a dia.</p>
      </fieldset>
      <input type="submit" name="crear" value="Crear cuenta">
    </form>
    <button type="button" name="button" onclick="location.href='listadoUsuarios.php'">Volver</button>
  </body>
</html>
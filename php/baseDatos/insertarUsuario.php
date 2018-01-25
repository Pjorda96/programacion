<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="registro.css">
  </head>
  <body>
    <h1>CREAR PERFIL</h1>
    <form action="#" method="post">
      <fieldset class="caja">
        <legend>¿QUIEN ERES?</legend>
        <p>Nombre <br>
        <input type="text" name="nombre" value="" placeholder="Introduce tu nombre"></p>
        <p>Apellidos <br>
          <input type="text" name="apellidos" value="" placeholder="Introduce tus apellidos"></p>
        <p>Fecha de nacimiento: <br>
        <input type="date" name="date"></p>
        <p>Curso <br>
          <input type="text" name="curso" value="" placeholder="Introduce tu curso"></p>
      </fieldset>
      <fieldset class="caja">
        <legend>¿CÓMO QUIERES INICIAR SESIÓN?</legend>
        <p>Nombre de usuario <br>
          <input type="text" name="usuario" value="" placeholder="Introduce tu usuario"></p>
        <p>Contraseña <br>
          <input type="password" name="contrasenya" value="" placeholder="Introduce tu contraseña"></p>
        <p>Repite la contraseña <br>
          <input type="password" name="contrasenya2" value="" placeholder="Introduce tu contraseña"></p>
      </fieldset>
      <fieldset class="caja">
        <legend>¿CONDICIONES DE REGISTRO?</legend>
        <p>Me va a gustar este juego <br>
        <input type="radio" name="gusto" value="">¡¡Por supuesto!!
        <input type="radio" name="gusto" value="">Al principio no pero me voy a enganchar
        <input type="radio" name="gusto" value="">Claro, es un clásico atemporal que [bla bla bla] y me va a encantar.</p>
        <p><input type="checkbox" name="acuerdo" value="">Acepto jugar sin trampas e intentar mejorar dia a dia.</p>
      </fieldset>
      <input type="submit" name="crear" value="Crear cuenta" onclick="">
    </form>
    <button type="button" name="button" onclick="location.href='listadoUsuarios.php'">Volver</button>
  </body>
</html>

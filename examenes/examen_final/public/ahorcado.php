<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ahorcado</title>
    <link rel="stylesheet" href="css/perfilUsuario.css">
  </head>
  <body>
    <h1 style="background-color: #55B0FF">Bienvenido al ahorcado</h1>
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
    <button type="button" name="button" onclick="location.href='listadoUsuarios-ex.php'">Volver</button>
    <script type="text/javascript" src=js/ahorcado.js></script>
  </body>
</html>

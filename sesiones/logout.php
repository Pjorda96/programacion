<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    $_SESSION=[]; //borrar todos los datos
    session_destroy();
    ?>
  </body>
</html>

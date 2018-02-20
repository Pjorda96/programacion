<?php
  include_once 'ClaseProfesor.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profesores</title>
  </head>
  <body>
    <?php
      $profesor1 = new ClaseProfesor();
      $profNombre1->getNombre();
      $profesor1->imprimeAsignatura();

      $profesor2 = new ClaseProfesor();
      $profNombre2->getNombre();
      $profesor2->imprimeAsignatura();
    ?>
  </body>
</html>

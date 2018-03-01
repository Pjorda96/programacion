<?php
require "Circulo.php";
require "Cuadrado.php";
require "Triangulo.php";

$circulo= new Circulo();
$circulo->setRadio($_POST['radio']);

$cuadrado= new Cuadrado();
$cuadrado->setLado($_POST['lado']);

$triangulo= new Triangulo();
$triangulo->setBase($_POST['base']);
$triangulo->setAltura($_POST['altura']);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculos</title>
  </head>
  <body>
    <table>
      <tr>
        <th></th><th>Área</th><th>Perímetro</th>
      </tr>
      <tr>
        <td>Circulo</td><td><?php echo $circulo->area() ?></td><td><?php echo $circulo->perimetro() ?></td>
      </tr>
      <tr>
        <td>Cuadrado</td><td><?php echo $cuadrado->area() ?></td><td><?php echo $cuadrado->perimetro() ?></td>
      </tr>
      <tr>
        <td>Triángulo</td><td><?php echo $triangulo->area() ?></td><td><?php echo $triangulo->perimetro() ?></td>
      </tr>
    </table>

    <button type="button" name="Volver" onclick="location.href='datos.php'">Volver</button>
  </body>
</html>

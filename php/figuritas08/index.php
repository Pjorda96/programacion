<?php
require "Circulo.php";
require "Cuadrado.php";
require "Triangulo.php";

$circulo= new Circulo();
$circulo->setRadio(3);

$cuadrado= new Cuadrado();
$cuadrado->setLado(4.5);

$triangulo= new Triangulo();
$triangulo->setBase(5.2);
$triangulo->setAltura(3);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figuras geométricas</title>
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
  </body>
</html>

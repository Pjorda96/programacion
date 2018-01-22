<?php
$world=new mysqli("localhost","root","","world");
if ($world->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $world->connect_error;
} else {
  //interactuar con la base de datos
  $resultado = $world->query("select Name, Population from city join country on city.CountryCode=country.Code where country.Name like '%Jap%'");
?>
  new Morris.Donut({
    // ID of the element in which to draw the chart.
    element: 'ciudadesJapon',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [
      <?php
      foreach ($resultado as $fila) {
        echo"{label: <?=$fila['Name']; ?>, value: <?=$fila['Population']; ?>},";
      ?>
      {label: "Valencia", value: 1}
    ]
  });
<?php
}
?>

new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'paisesMundo',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    <?php
    foreach ($resultado as $fila) {
      echo"{ y: <?=$fila['Name']; ?>, a: <?=$fila['SurfaceArea']; ?>},";
    ?>
    { y: 'hola', a: 100}
  ],
  // The name of the data record attribute that contains x-values.
  xkey: <?=$fila['Name']; ?>,
  // A list of names of data record attributes that contain y-values.
  ykeys: [<?=$world->query("select max(SurfaceArea) from country")?>,
    <?=$world->query("select min(SurfaceArea) from country")?>],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Área']
});

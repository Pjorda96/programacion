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

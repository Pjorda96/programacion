<?php
$world=new mysqli("localhost","root","","world");
if ($world->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $world->connect_error;
} else {
  //interactuar con la base de datos
  $resultado = $world->query("select Name, SurfaceArea from country order by SurfaceArea desc");
?>
  new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'paisesMundo',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [
      <?php
      foreach ($resultado as $fila) {
        echo"{ y: <?=$fila['Name']; ?>, a: 100, b: 90 },";
      ?>
      { y: '2012', a: 100, b: 90 }
    ],
    // The name of the data record attribute that contains x-values.
    xkey: <?=$fila['Name']; ?>,
    // A list of names of data record attributes that contain y-values.
    ykeys: [$world->query("select max(SurfaceArea) from country"),
      $world->query("select min(SurfaceArea) from country")],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Series A', 'Series B']
  });

    /*<div class='column left' style='background-color:#aaa;'>
      <?=$fila['Name']; ?>
    </div>
    <div class='column right' style='background-color:#bbb;'>
      <?=$fila['SurfaceArea']; ?>
    </div>*/
<?php
}
?>

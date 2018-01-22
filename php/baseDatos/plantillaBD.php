<?php
$world=new mysqli("localhost","root","","world");
if ($world->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $world->connect_error;
} else {
  //interactuar con la base de datos
  echo "<h1></h1>";
  $resultado = $world->query("select Name,SurfaceArea from country order by SurfaceArea desc");
  foreach ($resultado as $fila) {

  }
}
?>

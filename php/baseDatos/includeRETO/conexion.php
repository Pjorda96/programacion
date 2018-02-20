<?php
$world=new mysqli($server,$user,$password,$db);
if ($world->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $world->connect_error;
} else {
  $consulta="select * from country where Region='South America'";
  $resultado = $world->query($consulta);
}
?>

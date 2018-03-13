<?php
$juegos=new mysqli("localhost","root","","juegos");
if ($juegos->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $juegos->connect_error;
} else {
  $borrar="delete from usuarios where usuario='".$_POST['usuario']."';";
  $registro = $juegos->query($borrar);
}
header('Location: listadoUsuarios-07.php');
?>

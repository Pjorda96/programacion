<?php
$juegos=new mysqli("localhost","root","","juegos");
if ($juegos->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $juegos->connect_error;
} else {
  $actualizar="update usuarios set nombre='".$_POST['nombre']."',apellidos='".
  $_POST['apellidos']."',edad='".$_POST['edad']."',curso='".$_POST['curso']."' where usuario='".$_POST['usuario']."';";
  echo $actualizar;
  $registro = $juegos->query($actualizar);
}
header('Location: listadoUsuarios-06.php');
?>

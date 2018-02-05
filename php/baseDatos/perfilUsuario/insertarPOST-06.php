<?php
$juegos=new mysqli("localhost","root","","juegos");
if ($juegos->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $juegos->connect_error;
} else {
  $registro = $juegos->query("insert into usuarios
  (nombre,apellidos,usuario,contrasenya,edad,curso)
  values ('".$_POST['nombre']."','".$_POST['apellidos']."',
  '".$_POST['usuario']."','".$_POST['contrasenya']."',".$_POST['edad'].",
  '".$_POST['curso']."')");
}
header('Location: listadoUsuarios-06.php');
?>

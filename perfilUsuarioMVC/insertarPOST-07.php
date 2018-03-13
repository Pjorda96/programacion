<?php
$juegos=new mysqli("localhost","root","","juegos");
if ($juegos->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $juegos->connect_error;
} else {
  $insertar="insert into usuarios (nombre,apellidos,usuario,contrasenya,edad,curso) values ('".$_POST['nombre']."','".$_POST['apellidos']."', '".$_POST['usuario']."','".$_POST['contrasenya']."','".$_POST['edad']."', '".$_POST['curso']."')";
  $registro = $juegos->query($insertar);
}
header('Location: listadoUsuarios-07.php');
?>

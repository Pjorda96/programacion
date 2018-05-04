<?php
$juegos=new mysqli("localhost","root","","juegos");
if ($juegos->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $juegos->connect_error;
} else {
  //se ha añadido correo a la consulta
  $consulta="insert into usuarios
  (nombre,apellidos,usuario,contrasenya,edad,curso,correo)
  values ('".$_POST['nombre']."','".$_POST['apellidos']."',
  '".$_POST['usuario']."','".$_POST['contrasenya']."',".$_POST['edad'].",
  '".$_POST['curso']."','".$_POST['correo']."')";

  $registro = $juegos->query($consulta);
}
//echo $consulta;
header('Location: listadoUsuarios-EXAMEN.php');
?>

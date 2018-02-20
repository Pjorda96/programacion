<?php
class ClaseProfesor{

  private $nombre='Paco';
  private $asignatura='Programacion';

  public function getNombre(){
    return $this->nombre;//no es $nombre
  }
  public function imprimeAsignatura(){
    echo "<br>";
    echo $profNombre1;
    echo " da la asignatura de ";
    echo $this->asignatura;
    echo "<br>";
  }
}
?>

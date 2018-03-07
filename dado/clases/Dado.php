<?php
/**
 *
 */
class Dado
{
  private $caras=6;
  private $registro=[];

  function __construct()
  {

  }

  public function getCaras()
  {
    return $this->caras;
  }
  public function setCaras($caras)
  {
    if ($caras >= 0){
      $this->caras = $caras;
    }
  }
  public function getRegistro()
  {
    return $this->registro;
  }
  public function setRegistro($registro)
  {
    $this->registro = $registro;
  }

  public function aleatorio(){
    $aleatorio=rand(1, $this->caras);
    $registro[$aleatorio];
    return $aleatorio;
  }

  public function registro(){
    var_dump($registro);
  }
}

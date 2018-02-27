<?php
/**
 *
 */
class Circulo
{
  //radio
  private $radio=0;

  function __construct()
  {
    $this->radio=0;
  }

  //getters y setters
  public function getRadio(){
    return $this->radio;
  }
  public function setRadio($nuevo){
    $this->radio=$nuevo;
  }

  //funciones de area y perimetro
  public function area(){
    return pi() * $this->radio * $this->radio;
  }
  public function perimetro(){
    return $this->radio * 2 * pi();
  }
}

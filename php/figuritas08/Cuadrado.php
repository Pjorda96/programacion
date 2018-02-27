<?php
/**
 *
 */
class Cuadrado
{
  //lado
  private $lado=0;

  function __construct()
  {
    $this->base=0;
    $this->altura=0;
  }

  //getters y setters
  public function getLado(){
    return $this->lado;
  }
  public function setLado($nuevo){
    $this->lado=$nuevo;
  }

  //funciones de area y perimetro
  public function area(){
    return $this->lado * $this->lado;
  }
  public function perimetro(){
    return $this->lado * 4;
  }
}

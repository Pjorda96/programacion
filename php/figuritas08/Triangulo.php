<?php
/**
 *
 */
class Triangulo
{
  //base y altura
  private $base=0;
  private $altura=0;

  function __construct()
  {
    $this->base=0;
    $this->altura=0;
  }

  //getters y setters
  //getters y setters
  public function getBase(){
    return $this->base;
  }
  public function setBase($nuevo){
    $this->base=$nuevo;
  }
  public function getAltura(){
    return $this->altura;
  }
  public function setAltura($nuevo){
    $this->altura=$nuevo;
  }
  //funciones de area y perimetro
  public function area(){
    return ($this->base * $this->altura)/2;
  }
  public function perimetro(){
    return "No se puede saber el perímetro con los datos introducidos.";
  }
}

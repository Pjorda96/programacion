<?php
/**
 *
 */
class  Personaje
{
  //vida
  private $vida=100;
  //Nombre
  private $nombre="Gabo";

  function __construct()
  {

  }

  //getters y setters de vida
  public function setVida($nuevo){
    $this->vida=$nuevo;
  }
  public function getVida(){
    return $this->vida;
  }
  public function setNombre($nuevo){
    $this->nombre=$nuevo;
  }
  public function getNombre(){
    return $this->nombre;
  }
  //Restar $vida
  public function restarVida($nuevo){
    $this->vida=$this->vida-$nuevo;
  }
}

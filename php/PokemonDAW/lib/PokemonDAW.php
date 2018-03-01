<?php
/**
 *
 */
class PokemonDAW
{

  //variables
  private $vida=100;
  private $longitudCola=100;

  function __construct($vida,$longitudCola)
  {
    $this->vida=$vida;
    $this->longitudCola=$longitudCola;
  }
  public function getVida()
  {
    return $this->vida;
  }
  public function setVida($vida)
  {
    $this->vida = $vida;
    return $this->vida;
  }
  public function getLongitudCola()
  {
    return $this->longitudCola;
  }
  public function setLongitudCola($longitudCola)
  {
    $this->longitudCola = $longitudCola;
    return $this->longitudCola;
  }
}

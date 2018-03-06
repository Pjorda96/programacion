<?php
require_once "lib/PokemonDAW.php";
/**
 *
 */
class JosepMagikarp extends PokemonDaw
{
  private $utilidad=false;

  function __construct()
  {
    parent::setCola(0);
    parent::setVida(200);
  }

  public function getUtilidad()
  {
    return $this->utilidad;
  }

  public function setUtilidad($utilidad)
  {
    $this->utilidad = $utilidad;
  }

  public function programacion(){
    $this->utilidad=true;
  }

  public function sistemas(){
    $this->utilidad=false;
  }
}

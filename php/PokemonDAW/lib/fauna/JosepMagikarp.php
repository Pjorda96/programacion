<?php
require_once "lib/PokemonDAW.php";
/**
 *
 */
class JosepMagikarp extends PokemonDaw
{
  private $utilidad="ninguna";

  function __construct()
  {
    parent::setLongitudCola(0);
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
    $this->utilidad="poca";
  }

  public function sistemas(){
    $this->utilidad="ninguna";
  }
}

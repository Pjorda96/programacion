<?php
require_once "lib/PokemonDAW.php";
/**
 *
 */
class JoanGrowlithe extends PokemonDaw
{
  private $agilidad=100;

  function __construct()
  {
    
  }

  public function getAgilidad()
  {
    return $this->agilidad;
  }

  public function setAgilidad($agilidad)
  {
    $this->agilidad = $agilidad;
  }

  public function padel(){
    $this->agilidad=$this->agilidad + 10;
  }
}

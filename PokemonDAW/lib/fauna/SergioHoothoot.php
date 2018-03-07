<?php
require_once "lib/PokemonDAW.php";
/**
 *
 */
class SergioHoothoot extends PokemonDaw
{
  private $patas=1;

  function __construct()
  {

  }

  public function getPatas()
  {
    return $this->patas;
  }

  public function setPatas($patas)
  {
    $this->patas = $patas;
  }

  public function recuperado(){
    $this->patas=2;
  }

  public function roturaNueva(){
    $this->patas=$this->patas-1;
  }
}

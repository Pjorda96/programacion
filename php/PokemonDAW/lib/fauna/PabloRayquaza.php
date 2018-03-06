<?php
require_once "lib/PokemonDAW.php";
/**
 *
 */
class PabloRayquaza extends PokemonDaw
{
  private $altura=1.97;
  private $legendario=true;

  function __construct()
  {
    parent::setCola(1000);
    parent::setVida(1000);
  }

  public function getAltura()
  {
    return $this->altura;
  }

  public function setAltura($altura)
  {
    $this->altura = $altura;
  }

  public function getLegendario()
  {
    return $this->legendario;
  }

  public function comerYDormir(){
    $this->altura=$this->altura + 0.05;
  }

  public function nivelar(){
    parent::setCola(100);
  }
}

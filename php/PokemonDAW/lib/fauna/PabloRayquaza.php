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
    parent::setLongitudCola(1000);
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
    echo "Ha crecido 5 cm.";
  }

  public function nivelar(){
    parent::setLongitudCola(100);
    echo "Ha usado 'buena gente', se ha puesto al nivel del resto y ahora tiene 100 de vida.<br>";
  }
}

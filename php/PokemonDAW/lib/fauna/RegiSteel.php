<?php
require_once "lib/PokemonDAW.php";
/**
 *
 */
class RegiSteel extends PokemonDaw
{
  private $dureza=1000;

  function __construct()
  {
    parent::setVida(1000);
  }

  public function getDureza()
  {
    return $this->dureza;
  }

  public function setDureza($dureza)
  {
    $this->dureza = $dureza;
  }

  public function tardeDeGYM(){
    $this->dureza=$this->dureza + 10;
    echo "Ha usado 'tarde de gimnasio' y ahora tiene +10 de dureza.<br>";
  }
}

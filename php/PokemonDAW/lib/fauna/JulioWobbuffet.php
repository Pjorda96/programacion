<?php
require_once "lib/PokemonDAW.php";
/**
 *
 */
class JulioWobbuffet extends PokemonDaw
{
  private $juegos=10;

  function __construct()
  {

  }

  public function getJuegos()
  {
    return $this->juegos;
  }

  public function setJuegos($juegos)
  {
    $this->juegos = $juegos;
  }

  public function juegoNuevo(){
    $this->juegos=$this->juegos + 1;
  }
}

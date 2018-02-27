<?php
require_once "padre/Personaje.php";
/**
 *
 */
class  Gabo extends Personaje
{
  function __construct($nombre)
  {
    parent::setNombre($nombre);
    parent::setVida(150);
  }

}

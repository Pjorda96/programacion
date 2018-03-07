<?php
require_once "clases/Dado.php";
/**
 *
 */
class Numerico extends Dado
{


  function __construct($caras)
  {
    parent::setCaras($caras);
  }
}

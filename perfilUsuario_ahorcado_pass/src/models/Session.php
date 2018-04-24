<?php
namespace Daw\models;
/**
 *
 */
class Session
{

  function __construct()
  {
    session_start();
  }

  public function cerrarSesion(){
    $_SESSION=[]; //borrar todos los datos
    session_destroy();
    //header('Location: index.php');
  }
}

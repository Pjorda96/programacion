<?php
/**
 *
 */
class Db
{
  //propiedades de conexion
  private $server="localhost";
  private $user="root";
  private $password="";
  private $db="";

  //propiedad conector
  private $conector;

  function __construct($server,$user,$password,$db)
  {
    $this->server=$server;
    $this->user=$user;
    $this->password=$password;
    $this->db=$db;
  }
  function conexion(){
    $conectorTmp=new mysqli($this->server,$this->user,
                                $this->password,$this->db);
    if ($conectorTmp->connect_errno) {
      $this->conector=false;
    }else{
      $this->conector=$conectorTmp;
    }
  }
  function getConector(){
    return $this->conector;
  }
}

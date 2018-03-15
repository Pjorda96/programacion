<?php
require_once "config.php";
/**
 *
 */
class Db
{
  //Propiedades de conexion
  private $server="";
  private $user="";
  private $pass="";
  private $db="";
  //Propiedad conector
  private $conector;
  function __construct()
  {
    global $config;
    $this->server=$config["host"];
    $this->user=$config["user"];
    $this->pass=$config["pass"];
    $this->db=$config["db"];
  }
  function conectar(){
    $conectorTmp = new mysqli ($this->server,$this->user,
                                  $this->pass,$this->db) ;
    if ($conectorTmp->connect_errno) {
      $this->conector=false;
    }else{
      $this->conector=$conectorTmp;
    }
  }

  function getConector(){
    return $this->conector;
  }

  public function getServer()
  {
    return $this->server;
  }
  public function setServer($server)
  {
    $this->server = $server;
  }
  public function getUser()
  {
    return $this->user;
  }
  public function setUser($user)
  {
    $this->user = $user;
  }
  public function getPass()
  {
    return $this->pass;
  }
  public function setPass($pass)
  {
      $this->pass = $pass;
  }
  public function getDb()
  {
      return $this->db;
  }
  public function setDb($db)
  {
    $this->db = $db;
  }

  public function lista(){
    $juegos=new mysqli("localhost","root","","juegos");
    if ($juegos->connect_errno) {
      return "Fallo al conectar a MySQL: " . $juegos->connect_error;
    } else {
      //interactuar con la base de datos
      $usuarios="select usuario from usuarios";
      $resultado = $juegos->query($usuarios);
      foreach ($resultado as $fila) {
        echo '"<option value="';
        echo $fila['usuario'];
        echo '">';
        echo $fila['usuario'];
        echo '</option><br>"';
      }
    }
  }
}

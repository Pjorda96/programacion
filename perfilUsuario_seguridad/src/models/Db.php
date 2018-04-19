<?php
use Daw\config\Config;
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

  private $usuario="";
  private $nombre="";
  private $apellidos="";
  private $edad=0;
  private $curso="";

    //Propiedad conector
    private $conector;

  function __construct()
  {
    global $config;
    $this->server=Config::CFG_HOST;
    $this->user=Config::CFG_USER;
    $this->pass=Config::CFG_PASS;
    $this->db=Config::CFG_DB;
  }

  public function conectar(){
    $conectorTmp = new mysqli ($this->server,$this->user,
                                  $this->pass,$this->db) ;
    if ($conectorTmp->connect_errno) {
      $this->conector=false;
    }else{
      $this->conector=$conectorTmp;
    }
  }
  public function consulta($consulta){
      return $this->conector->query($consulta);
  }

  public function getConector()
  {
      return $this->conector;
  }
  public function setConector($conector)
  {
      $this->conector = $conector;
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
  public function getUsuario()
  {
    return $this->usuario;
  }
  public function setUsuario($usuario)
  {
    $this->usuario = $usuario;
  }
  public function getNombre()
  {
    return $this->nombre;
  }
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }
  public function getApellidos()
  {
    return $this->apellidos;
  }
  public function setApellidos($apellidos)
  {
    $this->apellidos = $apellidos;
  }
  public function getEdad()
  {
    return $this->edad;
  }
  public function setEdad($edad)
  {
    $this->edad = $edad;
  }
  public function getCurso()
  {
    return $this->curso;
  }
  public function setCurso($curso)
  {
    $this->curso = $curso;
  }
}

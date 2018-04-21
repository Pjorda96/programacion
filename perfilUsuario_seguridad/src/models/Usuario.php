<?php
namespace Daw\models;

use Daw\config\Config;
use mysqli;
/**
 *
 */
class Usuario
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

  private $conector="";

  function __construct()
  {
    global $config;
    $this->server=Config::CFG_HOST;
    $this->user=Config::CFG_USER;
    $this->pass=Config::CFG_PASS;
    $this->db=Config::CFG_DB;
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
    public function lista(){
        $usuarios="select usuario from usuarios";
        $resultado = $this->conector->query($usuarios);
        foreach ($resultado as $fila) {
            echo "<option value=";
            echo $fila['usuario'];
            echo ">";
            echo $fila['usuario'];
            echo "</option><br>";
        }
    }

    public function leerDatos(){
        $consulta="select nombre,apellidos,usuario,edad,curso from usuarios where usuario='".$_POST['usuario']."'";
        //echo $consulta;
        $consultaUsuario = $this->conector->query($consulta);
        $this->usuario=$_POST['usuario'];

        foreach ($consultaUsuario as $fila) {
            $this->nombre=$fila['nombre'];
            $this->apellidos=$fila['apellidos'];
            $this->edad=$fila['edad'];
            $this->curso=$fila['curso'];
        }
    }

    public function insertarUsuario($nombre,$apellidos,$edad,$curso,$usuario,$contrasenya){
        $insertar="insert into usuarios (nombre,apellidos,edad,curso,usuario,contrasenya) values
    ('".$nombre."','".$apellidos."','".$edad."','".$curso."','".$usuario."','".$contrasenya."')";
        //echo $insertar;
        $registro = $this->conector->query($insertar);
    }

    public function actualizarUsuario($usuario,$nombre,$apellidos,$edad,$curso){
        $actualizar="update usuarios set nombre='".$nombre."',apellidos='".
            $apellidos."',edad='".$edad."',curso='".$curso."'
    where usuario='".$usuario."';";
        $registro = $this->conector->query($actualizar);
    }

    public function borrarUsuario($borrado){
        $borrar="delete from usuarios where usuario='".$borrado."'";
        $registro = $this->conector->query($borrar);
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

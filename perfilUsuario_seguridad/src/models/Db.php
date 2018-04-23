<?php
/**
 * Created by PhpStorm.
 * User: pjord
 * Date: 21/04/2018
 * Time: 12:13
 */

namespace Daw\models;

use Daw\config\Config;
use mysqli;


class Db
{

    //Propiedades de conexion
    private $server="";
    private $user="";
    private $pass="";
    private $db="";

    private $conector="";

    function __construct()
    {
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

    public function consultar($consulta){
        $resultado=$this->conector->query($consulta);
        return $resultado;
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
}

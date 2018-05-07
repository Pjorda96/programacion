<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 07/05/2018
 * Time: 11:05
 */

namespace Daw\models;


class Juego extends Db
{

    private $nombre="";
    private $curso="";


    function __construct()
    {
        parent::__construct();
        parent::conectar();
    }

    public function listarJuegos(){
        $juegos="select nombre from juego";
        $resultado = parent::consultar($juegos);
        foreach ($resultado as $fila) {
            echo "<option value='";
            echo $fila['nombre'];
            echo "'>";
            echo $fila['nombre'];
            echo "</option>";
        }
    }

    public function insertarJuegos($nombre,$curso){
        $insertar="insert into juego (nombre,curso) values
    ('".$nombre."',".$curso.")";
        //var_dump($insertar);
        $registro = parent::consultar($insertar);
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getCurso()
    {
        return $this->curso;
    }
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    /*
    public function leerDatos(){
        $consulta="select nombre,apellidos,usuario,edad,curso from usuarios where usuario='".$_POST['usuario']."'";
        //echo $consulta;
        $consultaUsuario = parent::consultar($consulta);
        $this->usuario=$_POST['usuario'];

        foreach ($consultaUsuario as $fila) {
            $this->nombre=$fila['nombre'];
            $this->apellidos=$fila['apellidos'];
            $this->edad=$fila['edad'];
            $this->curso=$fila['curso'];
        }
    }

    public function actualizarUsuario($usuario,$nombre,$apellidos,$edad,$curso){
        $actualizar="update usuarios set nombre='".$nombre."',apellidos='".
            $apellidos."',edad='".$edad."',curso='".$curso."'
        where usuario='".$usuario."';";
        $registro = parent::consultar($actualizar);
    }

    public function borrarUsuario($borrado){
        $borrar="delete from usuarios where usuario='".$borrado."'";
        $registro = parent::consultar($borrar);
    }

    */
}
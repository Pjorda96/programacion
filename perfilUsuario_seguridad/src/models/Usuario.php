<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 19/04/2018
 * Time: 10:37
 */
namespace Daw\models;
use Daw\models\Db;


class Usuario extends Db
{
    function __construct()
    {
        parent::conectar();
    }

    /**
     *
     */
    public function lista(){
        $usuarios="select usuario from usuarios";
        $resultado = parent::consulta($usuarios);
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

}
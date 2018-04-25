<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 19/04/2018
 * Time: 10:37
 */

namespace Daw\models;
/**
 *
 */
class Usuario extends Db
{

    private $usuario="";
    private $nombre="";
    private $apellidos="";
    private $edad=0;
    private $curso="";


    function __construct()
    {
        parent::__construct();
        parent::conectar();
    }


    public function lista(){
        $usuarios="select usuario from usuarios";
        $resultado = parent::consultar($usuarios);
        foreach ($resultado as $fila) {
            echo "<option value='";
            echo $fila['usuario'];
            echo "'>";
            echo $fila['usuario'];
            echo "</option>";
        }
    }

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

    public function insertarUsuario($nombre,$apellidos,$edad,$curso,$usuario,$contrasenya){
        $insertar="insert into usuarios (nombre,apellidos,edad,curso,usuario,contrasenya) values
    ('".$nombre."','".$apellidos."','".$edad."','".$curso."','".$usuario."','".$contrasenya."')";
        //echo $insertar;
        $registro = parent::consultar($insertar);
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

    /*public function validate()
    {
        if (empty($_POST['username']) || empty($_POST['userlastname']) || empty($_POST['age']) || empty($_POST['course']) ||
            empty($_POST['score']) || empty($_POST['email']) || empty($_POST['password1']) || empty($_POST['password2'])) {
            echo "<br><p align = center>No dejes ningún campo vacío</p><br>";
            echo "<p align = center><a href='InsertarUsuario.php'>Por favor vuelve a resgistrarte, gracias</a></p><br><br><br>";
        } elseif ($_POST['password1'] != $_POST['password2']) {
            echo "<br><p align = center>Las contraseñas no coinciden</p><br>";
            echo "<p align = center><a href='InsertarUsuario.php'>Por favor vuelve a resgistrarte, gracias</a></p><br><br><br>";
        } else {
            $jugador = "SELECT * FROM juegos.usuarios WHERE nombre = '$_POST[username]'";
            $comprobarJugador = $this->conector->query($jugador);
            $contar = mysqli_num_rows($comprobarJugador);
            if ($this->conector->connect_errno) {
                echo "Fallo al conectar a MySQL: " .$conexion->connect_error;
            } elseif ($contar >= 1) {
                echo "<br><p align = center>El nick ya ha sido utilizado</p><br>";
                echo "<p align = center><a href='InsertarUsuario.php'>Por favor vuelve a resgistrarte con otro nombre</a></p><br><br><br>";
            } else {
                if (!empty($_POST["actu"])) {
                    $this->actualizar();
                } else {
                    $this->insertar();
                }
            }
        }
    }*/

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

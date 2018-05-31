<?php

require_once("dataObject.class.inc.php");

class Usuario extends DataObject {

    protected $datos = array( 
        "nombre" => null, 
        "primerApellido" => null, 
        "segundoApellido" => null,
        "nickname" => null,
        "passphrase" => null,
        "correoElectronico" => null,
        "fechaNacimiento" => null,
        "actividadPreferida" => null,
        "apuntarseFutbol" => 0,
        "apuntarseBaloncesto" => 0,
        "apuntarseRugby" => 0,
        "apuntarseZumba" => 0,
        "apuntarseCrossFit" => 0,
        "apuntarseYoga" => 0,
        "apuntarseSpinning" => 0,
        "apuntarseKickboxing" => 0,
        "miembroAnterior" => 0,
        "conocimiento" => null
    ); 

    public static function getUsuario($nickname) {
        $conexion = parent::conectar();

        $sql = "SELECT * FROM " . TABLA_USUARIOS . " WHERE nickname = :nickname";

        try {
            $st = $conexion->prepare($sql);
            $st->bindValue(":nickname", $nickname);
            $st->execute();
            $fila = $st->fetch();
            parent::desconectar($conexion);
            if ($fila) return new Usuario ($fila);
        } catch (PDOException $e) {
            parent::desconectar($conexion);
            die("Consulta fallida: ".$e->getMessage());
        }
    }

    public static function crearUsuario($datosUsuario) {
        $conexion = parent::conectar();

        $sql = "INSERT INTO Usuarios VALUES (:nombre, :primerApellido, :segundoApellido, :nickname,
            :passphrase, :correoElectronico, :fechaNacimiento, :actividadPreferida, :apuntarseFutbol,
            :apuntarseBaloncesto, :apuntarseRugby, :apuntarseZumba, :apuntarseCrossFit, :apuntarseYoga,
            :apuntarseSpinning, :apuntarseKickboxing, :miembroAnterior, :conocimiento)";

        $sentencia = $conexion->prepare($sql);

        try {

            foreach($datosUsuario as $key => $value) {
                if (!empty($value)){
                    if ($key == "passphrase")
                        $value = hash('sha512', $value);

                    $sentencia->bindValue(":".$key, $value);
                }
                else{
                    if ($key == "segundoApellido")
                        $sentencia->bindValue(":".$key, null);
                    else
                        $sentencia->bindValue(":".$key, 0);
                }
            }

            $_SESSION['nickname'] = $_POST['nickname'];
            $_SESSION['nombre'] = $_POST['nombre'];

            $sentencia->execute();
        } catch (PDOException $e){
            die("Petición fallida: ".$e->getMessage());
        }
    }

    public static function validarLogin($usuario, $passphrase) {
        $conexion = parent::conectar();

        $sql = "SELECT * FROM Usuarios WHERE nickname = :nickname AND passphrase = :passphrase";

        try {
            $sentencia = $conexion->prepare($sql);

            $sentencia->bindValue(":nickname", $usuario);
            $sentencia->bindValue(":passphrase", hash('sha512', $passphrase));
        
            $sentencia->execute();

            $filas = $sentencia->rowCount();
            
            if ($filas == 1){
                return true;
            }
            else {
                return false;
            }

        } catch (PDOException $e){
            die("Petición fallida: ".$e->getMessage());
        }
        
    }

    public static function obtenerCampo($usuario, $campo) {
        $conexion = parent::conectar();

        $sql = "SELECT :campo FROM Usuarios WHERE nickname = :nickname";

        try {
            $sentencia = $conexion->prepare($sql);

            $sentencia->bindValue(":campo", $campo);
            $sentencia->bindValue(":nickname", $usuario);

            $sentencia->execute();

            $resultado = $sentencia->fetch()[0];

            return $resultado;

        } catch (PDOException $e) {
            die("Petición fallida: ".$e->getMessage());
        }
    }
}

?>
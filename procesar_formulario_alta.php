<?php

define("DB_DSN", "mysql:host=localhost;dbname=db76589592_pw1718" );
define("DB_USUARIO", "x76589592");
define("DB_PASSWORD", "76589592");

try {
    $conexion = new PDO(DB_DSN, DB_USUARIO, DB_PASSWORD);
    $conexion->query('SET NAMES utf8');
} catch (PDOException $e){
    die("Conexión fallida: ".$e->getMessage());
}

$sql = "INSERT INTO Usuarios VALUES (:nombre, :primerApellido, :segundoApellido, :nickname,
    :passphrase, :correoElectronico, :fechaNacimiento, :actividadPreferida, :apuntarseFutbol,
    :apuntarseBaloncesto, :apuntarseRugby, :apuntarseZumba, :apuntarseCrossFit, :apuntarseYoga,
    :apuntarseSpinning, :apuntarseKickboxing, :miembroAnterior, :conocimiento)";

$sentencia = $conexion->prepare($sql);

try {

    foreach($_POST as $key => $value) {
        echo $key." ";
        if (!empty($value)){
            echo $value." ";
            $sentencia->bindValue(":".$key, $value);
        }
        else{
           echo "Campo no asignado ";
           $sentencia->bindValue(":".$key, 0);
        }
    }


    $sentencia->execute();
} catch (PDOException $e){
    die("Petición fallida: ".$e->getMessage());
}

?>
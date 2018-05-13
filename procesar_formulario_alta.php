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
        if (!empty($value)){
            $sentencia->bindValue(":".$key, $value);
        }
        else{
           $sentencia->bindValue(":".$key, 0);
        }
    }


    $sentencia->execute();
} catch (PDOException $e){
    die("Petición fallida: ".$e->getMessage());
}

$nombre = $_POST['nombre'];

?>

<!doctype html>
<html lang="es">

<head>
    <title>Centro Deportivo - Página principal</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="index.css" />
</head>

<header>
    <a href="index2.html">
        <img src="imagenes/trophy.svg" />
    </a>
    <h1 class="title">Centro deportivo de PW</h1>
    <div class="sign-out">
        <p>Bienvenid@ Usuario123</p>
        <a href="index.html">
            <p>Desconectarse</p>
        </a>
    </div>
</header>

<body>
    <section class="registro">
        <h2 class="mensaje-registro">¡Gracias por registrarte, <?php echo $nombre; ?>!</h2>
        <h4 class="mensaje-registro">Puedes volver a la página principal siguiendo <a href="index2.html">este enlace</a>.</h4>
    </section>
</body>
</html>
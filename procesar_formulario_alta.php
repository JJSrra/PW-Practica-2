<?php

session_start();

require_once("usuarios.class.inc.php");

Usuario::crearUsuario($_POST);

$_SESSION['nickname'] = $_POST['nickname'];
$_SESSION['nombre'] = $_POST['nombre'];

header("Location: registrado.php");
exit;

?>
<?php

require_once("usuarios.class.inc.php");

$usuario = new Usuario();
$usuario->crearUsuario($_POST);

header("Location: registrado.php");
exit;

?>
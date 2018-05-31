<?php

session_start();

require_once("usuarios.class.inc.php");

Usuario::crearUsuario($_POST);

header("Location: registrado.php");
exit;

?>
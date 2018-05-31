<?php

session_start();

require_once("usuarios.class.inc.php");

$validado = Usuario::validarLogin($_POST['nombreUsuario'], $_POST['passwordUsuario']);

if ($validado) {
    $_SESSION['nickname'] = $_POST['nombreUsuario'];
    header("Location: index.php");
    exit;
}
else {
    header("Location: index.php");
    exit;
}

?>
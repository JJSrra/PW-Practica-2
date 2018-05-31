<?php

session_start();

require_once("usuarios.class.inc.php");

$validado = Usuario::validarLogin($_SESSION['nickname'], $_POST['passphraseActual']);

if ($validado) {
    Usuario::actualizarDatos($_SESSION['nickname'], $_POST);
    header("Location: perfil.php");
    exit;
}
else {
    header("Location: index.php");
    exit;
}

?>
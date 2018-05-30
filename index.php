<?php
    session_start();
?>

<!doctype html>
<html lang="es">

<head>
    <title>Centro Deportivo - Página principal</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="index.css" />
</head>

<header class="cabecera">
    <a class="enlace" href="index.php">
        <img class="logo-centro" src="imagenes/trophy.svg" />
    </a>
    <h1 class="title">Centro deportivo de PW</h1>
    <?php
        if (!empty($_SESSION['nickname'])){
            echo '<div class="sign-out">
        <p>Bienvenid@ ' . $_SESSION['nickname'] . '</p>
        <a class="enlace" href="procesar_unlogin.php"><p>Desconectarse</p></a>
        </div>';
        }
        else {
            echo '<form class="formulario-login" method="POST" action="procesar_login.php">
        <label class="label-login" for="nombreUsuario">Usuario</label><br>
        <input class="input-login" type="text" id="nombreUsuario" name="nombreUsuario"/><br>
        <label class="label-login" for="passwordUsuario">Contraseña</label><br>
        <input class="input-login" type="password" id="passwordUsuario" name="passwordUsuario"/><br><br>
        <input class="input-login" type="submit" id="submitUsuario" name="submitUsuario"/>
        </form>';
        }
    ?>
</header>

<body>
    <section class="index-body-container index-left-container">
        <p class="frase-motivadora">¿Harto de ser gordo y feo? Sea sólo feo</p>
    </section>
    <section class="index-body-container index-right-container">
        <a class="enlace" href="actividades.php">Actividades</a>
        <a class="enlace" href="horario.php">Horario</a>
        <a class="enlace" href="tecnicos.php">Técnicos</a>
        <a class="enlace" href="instalaciones.php">Instalaciones y servicios</a>
        <a class="enlace" href="localizacion.php">Localización</a>
        <a class="enlace" href="precios.php">Precios y promociones</a>
        <?php
            if (!empty($_SESSION['nickname'])){
                echo '<a class="enlace" href="perfil.php">Perfil</a>';
            }
            else {
                echo '<a class="enlace" href="altausuario.php">Alta de usuarios</a>';
            }
        ?>
        <a class="enlace" href="foro.php">Foro</a>
    </section>
</body>

<footer class="pie">
    <a class="enlace" href="contacto.php">Contacto</a>
    <a class="enlace"> - </a>
    <a class="enlace" href="como_se_hizo.pdf">Cómo se hizo</a>
</footer>
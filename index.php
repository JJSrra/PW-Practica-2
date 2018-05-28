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

<header>
    <a href="index.html">
        <img src="imagenes/trophy.svg" />
    </a>
    <h1 class="title">Centro deportivo de PW</h1>
    <?php
        if (!empty($_SESSION['nickname'])){
            echo '<div class="sign-out">
        <p>Bienvenid@ ' . $_SESSION['nickname'] . '</p>
        <a href="procesar_unlogin.php"><p>Desconectarse</p></a>
        </div>';
        }
        else {
            echo '<form method="POST" action="procesar_login.php">
        <label for="nombreUsuario">Usuario</label><br>
        <input type="text" id="nombreUsuario" name="nombreUsuario"/><br>
        <label for="passwordUsuario">Contraseña</label><br>
        <input type="password" id="passwordUsuario" name="passwordUsuario"/><br><br>
        <input type="submit" id="submitUsuario" name="submitUsuario"/>
        </form>';
        }
    ?>
</header>

<body>
    <section class="body-container left-container">
        <p>¿Harto de ser gordo y feo? Sea sólo feo</p>
    </section>
    <section class="body-container right-container">
        <a href="actividades.html">Actividades</a>
        <a href="horario.html">Horario</a>
        <a href="tecnicos.html">Técnicos</a>
        <a href="instalaciones.html">Instalaciones y servicios</a>
        <a href="localizacion.html">Localización</a>
        <a href="precios.html">Precios y promociones</a>
        <a href="altausuario.html">Alta de usuarios</a>
        <a href="foro.html">Foro</a>
    </section>
</body>

<footer>
    <a href="contacto.html">Contacto</a>
    <a> - </a>
    <a href="como_se_hizo.pdf">Cómo se hizo</a>
</footer>
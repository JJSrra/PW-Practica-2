<?php
    session_start();
?>

<!doctype html>
<html lang="es">

<head>
    <title>Centro Deportivo - Técnicos</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="tecnicos.css" />
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
    <nav class="sections">
        <a class="enlace" href="index.php">Página principal</a>
        <a class="enlace" href="actividades.php">Actividades</a>
        <a class="enlace" href="horario.php">Horario</a>
        <a class="enlace" href="instalaciones.php">Instalaciones y servicios</a>
        <a class="enlace" href="localizacion.php">Localización</a>
        <a class="enlace" href="precios.php">Precios y promociones</a>
        <a class="enlace" href="altausuario.php">Alta de usuarios</a>
        <a class="enlace" href="foro.php">Foro</a>
    </nav>
    <section>
        <img src="imagenes/tecnico1.jpg"/>
        <p>John Doe</p>
    </section>
    <section>
        <img src="imagenes/tecnico2.jpg" />
        <p>Jane Doe</p>
    </section>
    <section>
        <img src="imagenes/tecnico1.jpg" />
        <p>John Doe</p>
    </section>
    <section>
        <img src="imagenes/tecnico2.jpg" />
        <p>Jane Doe</p>
    </section>
    <section>
        <img src="imagenes/tecnico1.jpg" />
        <p>John Doe</p>
    </section>
    <section>
        <img src="imagenes/tecnico2.jpg" />
        <p>Jane Doe</p>
    </section>
    <section>
        <img src="imagenes/tecnico1.jpg" />
        <p>John Doe</p>
    </section>
    <section>
        <img src="imagenes/tecnico2.jpg" />
        <p>Jane Doe</p>
    </section>
    <section>
        <img src="imagenes/tecnico1.jpg" />
        <p>John Doe</p>
    </section>
</body>

<footer>
    <a class="enlace" href="contacto.php">Contacto</a>
    <a> - </a>
    <a class="enlace" href="como_se_hizo.pdf">Cómo se hizo</a>
</footer>
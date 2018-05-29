<?php
    session_start();
?>

<!doctype html>
<html lang="es">

<head>
    <title>Centro Deportivo - Actividades - Spinning</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="actividad.css" />
</head>

<header class="cabecera">
    <a class="enlace" class="enlace" href="index.php">
        <img class="logo-centro" src="imagenes/trophy.svg" />
    </a>
    <h1 class="title">Centro deportivo de PW</h1>
    <?php
        if (!empty($_SESSION['nickname'])){
            echo '<div class="sign-out">
        <p>Bienvenid@ ' . $_SESSION['nickname'] . '</p>
        <a class="enlace" class="enlace" href="procesar_unlogin.php"><p>Desconectarse</p></a>
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
    <nav>
        <a class="enlace" href="index.php">Página principal</a>
        <a class="enlace" href="actividades.php">Actividades</a>
        <a class="enlace" href="horario.php">Horario</a>
        <a class="enlace" href="tecnicos.php">Técnicos</a>
        <a class="enlace" href="instalaciones.php">Instalaciones y servicios</a>
        <a class="enlace" href="localizacion.php">Localización</a>
        <a class="enlace" href="precios.php">Precios y promociones</a>
        <a class="enlace" href="altausuario.php">Alta de usuarios</a>
        <a class="enlace" href="foro.php">Foro</a>
    </nav>
    <section class="body-container container-actividad">
        <h1 class="nombre-actividad">Spinning</h1>
        <img src="imagenes/spinning.jpg" />
        <p class="descripcion-actividad">
            Spinning es un entrenamiento aeróbico, principalmente de piernas,
            en el que se trabaja en grupo con un monitor que indica cambios
            frecuentes de intensidad. Es una gimnasia muy adaptable al nivel del
            alumno, pudiendo ser tan sencillas como un paseo tranquilo o agotador
            hasta para un ciclista profesional. Cada miembro elige su ritmo y hay un total
            de 5 niveles para escoger.
        </p>
        <ul class="detalles-actividad">
            <li>
                Horario de clases: lunes 12:30-13:30, miércoles 12:30-13:30, viernes 12:30-13:30
            </li>
            <li>
                Monitores: John Doe, Jane Doe
            </li>
            <li>
                Lugar de desarrollo: Gimnasio 1
            </li>
        </ul>
    </section>
    <section class="body-container menu-actividades">
        <a class="actividad primera-actividad" href="actividad1.php">CrossFit</a>
        <a class="actividad" href="actividad3.php">Kickboxing</a>
        <a class="actividad" href="actividad1.php">CrossFit</a>
        <a class="actividad" href="actividad3.php">Kickboxing</a>
        <a class="actividad" href="actividad1.php">CrossFit</a>
        <a class="actividad" href="actividad3.php">Kickboxing</a>
        <a class="actividad" href="actividad1.php">CrossFit</a>
        <a class="actividad ultima-actividad" href="actividad3.php">Kickboxing</a>
    </section>
</body>

<footer>
    <a class="enlace" href="contacto.php">Contacto</a>
    <a> - </a>
    <a class="enlace" href="como_se_hizo.pdf">Cómo se hizo</a>
</footer>
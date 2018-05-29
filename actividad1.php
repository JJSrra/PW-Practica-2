<?php
    session_start();
?>

<!doctype html>
<html lang="es">

<head>
    <title>Centro Deportivo - Actividades - CrossFit</title>
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
        <h1 class="nombre-actividad">CrossFit</h1>
        <img src="imagenes/crossfit.jpg" />
        <p class="descripcion-actividad">
            CrossFit es una técnica de entrenamiento que encadena movimientos
            de diferentes disciplinas al mismo tiempo, como halterofilia,
            entrenamiento metabólico y gimnástico. La meta es desarrollar las
            capacidades y habilidades humanas. Exponiendo a la persona a tantos
            escenarios y combinaciones de movimientos como sea posible se logra
            una adaptación que la prepara para lo desconocido y lo poco probable.
        </p>
        <ul class="detalles-actividad">
            <li>
                Horario de clases: martes 8:30-10:30, jueves 8:30-10:30
            </li>
            <li>
                Monitora: Jane Doe
            </li>
            <li>
                Lugar de desarrollo: Gimnasio 3
            </li>
        </ul>
    </section>
    <section class="body-container menu-actividades">
        <a class="actividad primera-actividad" href="actividad2.php">Spinning</a>
        <a class="actividad" href="actividad3.php">Kickboxing</a>
        <a class="actividad" href="actividad2.php">Spinning</a>
        <a class="actividad" href="actividad3.php">Kickboxing</a>
        <a class="actividad" href="actividad2.php">Spinning</a>
        <a class="actividad" href="actividad3.php">Kickboxing</a>
        <a class="actividad" href="actividad2.php">Spinning</a>
        <a class="actividad ultima-actividad" href="actividad3.php">Kickboxing</a>
    </section>
</body>

<footer>
    <a class="enlace" href="contacto.php">Contacto</a>
    <a> - </a>
    <a class="enlace" href="como_se_hizo.pdf">Cómo se hizo</a>
</footer>
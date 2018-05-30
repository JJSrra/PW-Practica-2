<?php
    session_start();
?>

<!doctype html>
<html lang="es">

<head>
    <title>Centro Deportivo - Precios y promociones</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="precios.css" />
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
    <nav>
        <a class="enlace" href="index.php">Página principal</a>
        <a class="enlace" href="actividades.php">Actividades</a>
        <a class="enlace" href="horario.php">Horario</a>
        <a class="enlace" href="tecnicos.php">Técnicos</a>
        <a class="enlace" href="instalaciones.php">Instalaciones y servicios</a>
        <a class="enlace" href="localizacion.php">Localización</a>
        <?php
            if (!empty($_SESSION['nickname'])){
                echo '<a class="enlace" href="perfil.php">Perfil</a>';
            }
            else {
                echo '<a class="enlace" href="altausuario.php">Alta de usuarios</a>';
            }
        ?>
        <a class="enlace" href="foro.php">Foro</a>
    </nav>
    <table>
        <caption>Precios y promociones</caption>
        <thead>
            <tr>
                <th class="sin-bordes"></th>
                <th>Suscripción gimnasio</th>
                <th>Suscripción + 1 clase</th>
                <th>Suscripción + 2 clases</th>
                <th>Suscripción + >2 clases</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Precio estándar</th>
                <td>25€/mes</td>
                <td>32€/mes</td>
                <td>36€/mes</td>
                <td>40€/mes</td>
            </tr>
            <tr>
                <th>Menores de 22 años</th>
                <td>22€/mes</td>
                <td>29€/mes</td>
                <td>33€/mes</td>
                <td>37€/mes</td>
            </tr>
            <tr>
                <th>Estudiantes y parados</th>
                <td>20€/mes</td>
                <td>27€/mes</td>
                <td>31€/mes</td>
                <td>35€/mes</td>
            </tr>
        </tbody>
    </table>
</body>

<footer>
    <a class="enlace" href="contacto.php">Contacto</a>
    <a> - </a>
    <a class="enlace" href="como_se_hizo.pdf">Cómo se hizo</a>
</footer>
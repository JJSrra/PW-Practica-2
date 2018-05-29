<?php
    session_start();
?>

<!doctype html>
<html lang="es">

<head>
    <title>Centro Deportivo - Horario</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="horario.css" />
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
        <a class="enlace" href="tecnicos.php">Técnicos</a>
        <a class="enlace" href="instalaciones.php">Instalaciones y servicios</a>
        <a class="enlace" href="localizacion.php">Localización</a>
        <a class="enlace" href="precios.php">Precios y promociones</a>
        <a class="enlace" href="altausuario.php">Alta de usuarios</a>
        <a class="enlace" href="foro.php">Foro</a>
    </nav>

    <table>
        <caption>Horario de actividades del centro</caption>
        <thead>
            <tr>
                <th class="sin-bordes"></th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>8:30-9:30</th>
                <td></td>
                <td class="ocupado" rowspan="2">CrossFit</td>
                <td></td>
                <td class="ocupado" rowspan="2">CrossFit</td>
                <td></td>
            </tr>
            <tr>
                <th>9:30-10:30</th>
                <td class="ocupado" rowspan="2">Zumba</td>
                <td class="ocupado" rowspan="2">Zumba</td>
                <td class="ocupado" rowspan="2">Zumba</td>
            </tr>
            <tr>
                <th>10:30-11:30</th>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>11:30-12:30</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>12:30-13:30</th>
                <td class="ocupado">Spinning</td>
                <td></td>
                <td class="ocupado">Spinning</td>
                <td></td>
                <td class="ocupado">Spinning</td>
            </tr>
            <tr>
                <th>13:30-14:30</th>
                <td class="descanso" rowspan="2" colspan="5">Descanso del personal</td>
            </tr>
            <tr>
                <th>14:30-15:30</th>
            </tr>
            <tr>
                <th>15:30-16:30</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>16:30-17:30</th>
                <td></td>
                <td class="ocupado" rowspan="2">Fútbol</td>
                <td class="ocupado" rowspan="2">Fútbol</td>
                <td class="ocupado" rowspan="2">Fútbol</td>
                <td class="ocupado">Yoga</td>
            </tr>
            <tr>
                <th>17:30-18:30</th>
                <td class="ocupado" rowspan="2">Kickboxing</td>
                <td></td>
            </tr>
            <tr>
                <th>18:30-19:30</th>
                <td class="ocupado">Yoga</td>                
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>19:30-20:30</th>
                <td class="ocupado" rowspan="2">Baloncesto</td>
                <td></td>
                <td class="ocupado" rowspan="2">Baloncesto</td>
                <td class="ocupado" rowspan="2">Baloncesto</td>
                <td class="ocupado" rowspan="2">Rugby</td>
            </tr>
            <tr>
                <th>20:30-21:30</th>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

<footer>
    <a class="enlace" href="contacto.php">Contacto</a>
    <a> - </a>
    <a class="enlace" href="como_se_hizo.pdf">Cómo se hizo</a>
</footer>
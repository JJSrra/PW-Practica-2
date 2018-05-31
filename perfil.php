<?php
    session_start();

    require_once('usuarios.class.inc.php');

    $usuario = Usuario::getUsuario($_SESSION['nickname']);
    $nombre = $usuario->getValor('nombre');
    $primerApellido = $usuario->getValor('primerApellido');
    $segundoApellido = $usuario->getValor('segundoApellido');
    $correoElectronico = $usuario->getValor('correoElectronico');
    $fechaNacimiento = $usuario->getValor('fechaNacimiento');
    $actividadPreferida = $usuario->getValor('actividadPreferida');
?>

<!doctype html>
<html lang="es">

<head>
    <title>Centro Deportivo - Perfil</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="altausuario.css" />
    <script>
    function validarFormulario(){
        var obligatorios = ["nombre", "primerApellido",
                            "correoElectronico", "fechaNacimiento"];

        for (campo of obligatorios){
            if (document.forms["modificar-perfil"][campo].value == ""){
                alert("El campo " + campo + " no puede dejarse en blanco");
                return false;
            }
        }

        if (document.forms["modificar-perfil"]["passphraseActual"].value == ""){
                alert("Debes introducir tu contraseña actual para validar los cambios");
                return false;
        }
        
        var passphrase = document.forms["modificar-perfil"]["passphrase"].value;
        if (passphrase.length != 0 && passphrase.length < 4) {
            alert("Tu nueva contraseña tiene que tener al menos 4 caracteres");
            return false;
        }

        var correoElectronico = document.forms["modificar-perfil"]["correoElectronico"].value;
        if (correoElectronico.indexOf(' ') > -1){
            alert("Un correo electrónico no puede contener espacios en blanco");
            return false;
        }
        else if (correoElectronico.indexOf('@') < 1){
            alert("Un correo electrónico debe tener este formato: <nombre>@<dominio>.<extension>");
            return false;
        }

    }
    </script>
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
        <a class="enlace" href="precios.php">Precios y promociones</a>
        <a class="enlace" href="foro.php">Foro</a>
    </nav>

    <form class="formulario-alta" name="modificar-perfil" onsubmit="return validarFormulario()" method="POST" action="modificar_perfil.php">
        <legend>Modifica tus datos de perfil</legend>
        <label for="nombre">Nombre *</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre ?>"/>
        <label for="primerApellido">Primer apellido *</label>
        <input type="text" id="primerApellido" name="primerApellido" value="<?php echo $primerApellido ?>"/>
        <label for="segundoApellido">Segundo apellido</label>
        <input type="text" id="segundoApellido" name="segundoApellido" value="<?php echo $segundoApellido ?>" />
        <label for="passphrase">Nueva contraseña (sólo si quieres cambiar la actual)</label>
        <input type="password" id="passphrase" name="passphrase"/>
        <label for="correoElectronico">Correo electrónico *</label>
        <input type="text" id="correoElectronico" name="correoElectronico" value="<?php echo $correoElectronico ?>"/>
        <label for="fechaNacimiento">Fecha de nacimiento *</label>
        <input class="input-fecha" type="date" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo $fechaNacimiento ?>"/>
        <label for="actividadPreferida">Actividad deportiva preferida</label>
        <select id="actividadPreferida" name="actividadPreferida" value="<?php echo $actividadPreferida ?>"=>
            <option <?php if($actividadPreferida == "futbol") echo "selected='selected'" ?> value="futbol">Fútbol</option>
            <option <?php if($actividadPreferida == "baloncesto") echo "selected='selected'" ?> value="baloncesto">Baloncesto</option>
            <option <?php if($actividadPreferida == "rugby") echo "selected='selected'" ?> value="rugby">Rugby</option>
            <option <?php if($actividadPreferida == "zumba") echo "selected='selected'" ?> value="zumba">Zumba</option>
            <option <?php if($actividadPreferida == "crossfit") echo "selected='selected'" ?> value="crossfit">CrossFit</option>
            <option <?php if($actividadPreferida == "yoga") echo "selected='selected'" ?> value="yoga">Yoga</option>
            <option <?php if($actividadPreferida == "spinning") echo "selected='selected'" ?> value="spinning">Spinning</option>
            <option <?php if($actividadPreferida == "kickboxing") echo "selected='selected'" ?> value="kickboxing">Kickboxing</option>
            <option <?php if($actividadPreferida == "otra") echo "selected='selected'" ?> value="otra">Otra</option>
        </select>
        <br/>
        <label for="passphrase">Introduce tu actual contraseña para confirmar los cambios</label>
        <input type="password" id="passphraseActual" name="passphraseActual"/>
        <input type="submit" class="form-button" id="modificarPerfil" value="Modificar perfil"/>
    </form>
</body>

<footer>
    <a class="enlace" href="contacto.php">Contacto</a>
    <a> - </a>
    <a class="enlace" href="como_se_hizo.pdf">Cómo se hizo</a>
</footer>
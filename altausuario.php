<?php
    session_start();
?>

<!doctype html>
<html lang="es">

<head>
    <title>Centro Deportivo - Alta de usuarios</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="altausuario.css" />
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

    <form class="formulario-alta" method="POST" action="procesar_formulario_alta.php">
        <legend>¡Únete a nuestro centro!</legend>
        <label for="nombre">Nombre *</label>
        <input type="text" id="nombre" name="nombre" required/>
        <label for="primerApellido">Primer apellido *</label>
        <input type="text" id="primerApellido" name="primerApellido" required/>
        <label for="segundoApellido">Segundo apellido</label>
        <input type="text" id="segundoApellido" name="segundoApellido" />
        <label for="nickname">Nombre de usuario *</label>
        <input type="text" maxlength="15" id="nickname" name="nickname" required/>
        <label for="passphrase">Contraseña *</label>
        <input type="password" id="passphrase" name="passphrase" required/>
        <label for="correoElectronico">Correo electrónico *</label>
        <input type="text" id="correoElectronico" name="correoElectronico" required/>
        <label for="fechaNacimiento">Fecha de nacimiento *</label>
        <input class="input-fecha" type="date" id="fechaNacimiento" name="fechaNacimiento" required/>
        <label for="actividadPreferida">Actividad deportiva preferida</label>
        <select id="actividadPreferida" name="actividadPreferida" >
            <option value="futbol">Fútbol</option>
            <option value="baloncesto">Baloncesto</option>
            <option value="rugby">Rugby</option>
            <option value="zumba">Zumba</option>
            <option value="crossfit">CrossFit</option>
            <option value="yoga">Yoga</option>
            <option value="spinning">Spinning</option>
            <option value="kickboxing">Kickboxing</option>
            <option value="otra">Otra</option>
        </select>
        <label>¿A qué actividades estás interesad@ en apuntarte?</label>
        <section>
            <input type="hidden" id="checkFutbolHidden" value=0 name="apuntarseFutbol" />
            <input type="checkbox" id="checkFutbol" value=1 name="apuntarseFutbol" />
            <label class="categoria" for="checkFutbol">Fútbol</label>
            <input type="hidden" id="checkBaloncestoHidden" value=0 name="apuntarseBaloncesto"/>
            <input type="checkbox" id="checkBaloncesto" value=1 name="apuntarseBaloncesto"/>
            <label class="categoria" for="checkBaloncesto">Baloncesto</label>
            <input type="hidden" id="checkRugbyHidden" value=0 name="apuntarseRugby"/>
            <input type="checkbox" id="checkRugby" value=1 name="apuntarseRugby"/>
            <label class="categoria" for="checkRugby">Rugby</label>
            <input type="hidden" id="checkZumbaHidden" value=0 name="apuntarseZumba" />
            <input type="checkbox" id="checkZumba" value=1 name="apuntarseZumba" />
            <label class="categoria" for="checkZumba">Zumba</label>
            <input type="hidden" id="checkCrossFitHidden" value=0 name="apuntarseCrossFit"/>
            <input type="checkbox" id="checkCrossFit" value=1 name="apuntarseCrossFit"/>
            <label class="categoria" for="checkCrossFit">CrossFit</label>
            <input type="hidden" id="checkYogaHidden" value=0 name="apuntarseYoga"/>
            <input type="checkbox" id="checkYoga" value=1 name="apuntarseYoga"/>
            <label class="categoria" for="checkYoga">Yoga</label>
            <input type="hidden" id="checkSpinningHidden" value=0 name="apuntarseSpinning"/>
            <input type="checkbox" id="checkSpinning" value=1 name="apuntarseSpinning"/>
            <label class="categoria" for="checkSpinning">Spinning</label>
            <input type="hidden" id="checkKickboxingHidden" value=0 name="apuntarseKickboxing"/>
            <input type="checkbox" id="checkKickboxing" value=1 name="apuntarseKickboxing"/>
            <label class="categoria" for="checkKickboxing">Kickboxing</label>
        </section>
        <label>¿Alguna vez has sido miembro de un centro deportivo? *</label>
        <section>
            <input type="radio" id="radioSi" name="miembroAnterior" value=1 required/>
            <label class="categoria" for="radioSi" >Sí</label>
            <input type="radio" id="radioNo" name="miembroAnterior" value=0 required/>
            <label class="categoria" for="radioNo" >No</label>
        </section>
        <label for="conocimiento">¿Cómo nos conociste? *</label>
        <textarea id="conocimiento" name="conocimiento" maxlength="500" rows="5" placeholder="A través de un amigo, por internet, un anuncio..." required></textarea>
        <br/>
        <input type="submit" class="form-button" id="enviarFormulario" value="Enviar formulario"/>
    </form>
</body>

<footer>
    <a class="enlace" href="contacto.php">Contacto</a>
    <a> - </a>
    <a class="enlace" href="como_se_hizo.pdf">Cómo se hizo</a>
</footer>
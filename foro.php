<?php
    session_start();
?>

<!doctype html>
<html lang="es">

<head>
    <title>Centro Deportivo - Foro</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="foro.css" />
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
        <?php
            if (!empty($_SESSION['nickname'])){
                echo '<a class="enlace" href="perfil.php">Perfil</a>';
            }
            else {
                echo '<a class="enlace" href="altausuario.php">Alta de usuarios</a>';
            }
        ?>
    </nav>
    <h1 class="titulo-foro">Bienvenido al foro</h1>
    <h2 class="subtitulo-foro">
        Lee los últimos temas de interés en el Centro, da tu opinión acerca
        de los mismos o abre tu propio hilo si tienes algo nuevo que aportar.
        ¡Leemos vuestras propuestas!        
    </h2>
    <form class="formulario-hilo">
        <label>Crea un nuevo hilo</label>
        <br>
        <input class="input-titulo" placeholder="Título" required>
        <textarea rows="5" placeholder="Descripción" required></textarea>
        <input class="boton-enviar" type="submit" id="crear-hilo" value="Crear hilo">
    </form>
    <section class="hilo">
        <section class="hilo-cabecera">Problema con las fuentes del gimnasio 3</section>
        <section class="hilo-respuesta">
            <article class="usuario">
                <img src="imagenes/usuario1.jpg">
                <p class="nombre-usuario">Paula86</p>
            </article>
            <article class="texto-respuesta">Hola, llevo varios años siendo miembro de este centro y es la primera vez que escribo en este foro. Hace una semana que las fuentes del gimnasio 3 no funcionan correctamente, y dan el agua con poca fuerza, lo que hace imposible beber y rellenar las botellas. Por favor, agradecería si pueden arreglarlo pronto, es un incordio para los que traemos una botella de casa.
                
Aprovecho para dar las gracias por las nuevas cintas de correr, el diseño es muy cómodo y hace más agradable estar tanto tiempo sobre ella.

Un saludo, Paula.</article>
        </section>
        <section class="hilo-respuesta">
            <article class="usuario">
                <img src="imagenes/usuario2.jpg">
                <p class="nombre-usuario">manolorugby</p>
            </article>
            <article class="texto-respuesta">también puedes llenarla en los baños jaja salu2</article>
        </section>
        <section class="hilo-respuesta">
            <article class="usuario">
                <img src="imagenes/tecnico1.jpg">
                <p class="nombre-usuario">J0hnD03</p>
            </article>
            <article class="texto-respuesta">Hola Paula.

Estamos trabajando en arreglar las fuentes, ha habido un problema con el caudal y tenemos que esperar a que manden un técnico especializado en el tema. Si todo va según lo previsto estarán arregladas para la semana que viene. Lamentamos no poder hacer nada antes pero no es algo que esté en nuestras manos.

Por favor, disculpen las molestias.

Un saludo,
John Doe, técnico del Centro.
            </article>
        </section>
        <form class="formulario-hilo">
            <label for="respuesta-usuario">Responde a este hilo</label>
            <br>
            <textarea id="respuesta-usuario" rows="5" required></textarea>
            <br>
            <input class="boton-enviar" type="submit" id="enviar-respuesta" value="Enviar respuesta">
        </form>
    </section>
    <section class="hilo">
        <section class="hilo-cabecera">Nivel de las clases de kickboxing</section>
        <section class="hilo-respuesta">
            <article class="usuario">
                <img src="imagenes/usuario3.jpg">
                <p class="nombre-usuario">joseluiscr7</p>
            </article>
            <article class="texto-respuesta">Hola, me he apuntado a las clases de kickboxing pero no sé cómo está el nivel. He practicado kickboxing durante mucho tiempo y no quiero un nivel amateur, necesito algo que me motive.

Gracias por responder.
            </article>
        </section>
        <section class="hilo-respuesta">
            <article class="usuario">
                <img src="imagenes/usuario4.jpg">
                <p class="nombre-usuario">Pilarica</p>
            </article>
            <article class="texto-respuesta">Yo estoy en clase de kickboxing y hay buen nivel, ¿por qué no vienes el lunes y nos enseñas lo que sabes?</article>
        </section>
        <section class="hilo-respuesta">
            <article class="usuario">
                <img src="imagenes/usuario2.jpg">
                <p class="nombre-usuario">manolorugby</p>
            </article>
            <article class="texto-respuesta">yo nunca he estado en kickboxing pero como buen español tengo que dar mi opinión aunque no tenga ni idea jaja salu2</article>
        </section>
        <section class="hilo-respuesta">
            <article class="usuario">
                <img src="imagenes/usuario3.jpg">
                <p class="nombre-usuario">joseluiscr7</p>
            </article>
            <article class="texto-respuesta">Gracias, el lunes iré a mi primera clase a ver lo que hay.

Un saludo.</article>
        </section>
        <form class="formulario-hilo">
            <label for="respuesta-usuario">Responde a este hilo</label>
            <br>
            <textarea id="respuesta-usuario" rows="5" required></textarea>
            <br>
            <input class="boton-enviar" type="submit" id="enviar-respuesta" value="Enviar respuesta">
        </form>
    </section>
</body>

<footer>
    <a class="enlace" href="contacto.php">Contacto</a>
    <a> - </a>
    <a class="enlace" href="como_se_hizo.pdf">Cómo se hizo</a>
</footer>
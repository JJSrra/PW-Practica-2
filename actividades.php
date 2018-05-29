<?php
    session_start();
?>

<!doctype html>
<html lang="es">

<head>
    <title>Centro Deportivo - Actividades</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="actividades.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <nav class="topnav" id="topnav">
        <a class="enlace" href="javascript:void(0);" class="menu-icon" onclick="deployNav()">&#9776;</a>
        <a class="enlace" href="index.php">Página principal</a>
        <a class="enlace" href="horario.php">Horario</a>
        <a class="enlace" href="tecnicos.php">Técnicos</a>
        <a class="enlace" href="instalaciones.php">Instalaciones y servicios</a>
        <a class="enlace" href="localizacion.php">Localización</a>
        <a class="enlace" href="precios.php">Precios y promociones</a>
        <a class="enlace" href="altausuario.php">Alta de usuarios</a>
        <a class="enlace" href="foro.php">Foro</a>
        <script>
            function deployNav() {
                var x = document.getElementById("topnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </nav>
    <section class="body-container container-actividades">
        <section class="actividad">
            <article class="left-container">
                <img src="imagenes/crossfit.jpg" />
            </article>
            <article class="right-container">
                <h2 class="titulo-actividad">CrossFit</h2>
                <a class="enlace" href="actividad1.php">
                    <h4 class="descripcion-actividad">
                        CrossFit es una técnica de entrenamiento que encadena movimientos
                        de diferentes disciplinas al mismo tiempo, como halterofilia,
                        entrenamiento metabólico y gimnástico.
                    </h4>
                </a>
            </article>
        </section>
        <section class="actividad">
            <article class="left-container">
                <img src="imagenes/spinning.jpg" />
            </article>
            <article class="right-container">
                <h2 class="titulo-actividad">Spinning</h2>
                <a class="enlace" href="actividad2.php">
                    <h4 class="descripcion-actividad">
                        Spinning es un entrenamiento aeróbico, principalmente de piernas,
                        en el que se trabaja en grupo con un monitor que indica cambios
                        frecuentes de intensidad.
                    </h4>
                </a>
            </article>
        </section>
        <section class="actividad">
            <article class="left-container">
                <img src="imagenes/kickboxing.jpg" />
            </article>
            <article class="right-container">
                <h2 class="titulo-actividad">Kickboxing</h2>
                <a class="enlace" href="actividad3.php">
                    <h4 class="descripcion-actividad">
                        Kickboxing es un deporte de combate que combina las técnicas del
                        boxeo con las técnicas de patadas de algunas artes marciales como
                        kárate y muay thai.
                    </h4>
                </a>
            </article>
        </section>
        <section class="actividad">
            <article class="left-container">
                <img src="imagenes/crossfit.jpg" />
            </article>
            <article class="right-container">
                <h2 class="titulo-actividad">CrossFit</h2>
                <a class="enlace" href="actividad1.php">
                    <h4 class="descripcion-actividad">
                        CrossFit es una técnica de entrenamiento que encadena movimientos
                        de diferentes disciplinas al mismo tiempo, como halterofilia,
                        entrenamiento metabólico y gimnástico.
                    </h4>
                </a>
            </article>
        </section>
        <section class="actividad">
            <article class="left-container">
                <img src="imagenes/spinning.jpg" />
            </article>
            <article class="right-container">
                <h2 class="titulo-actividad">Spinning</h2>
                <a class="enlace" href="actividad2.php">
                    <h4 class="descripcion-actividad">
                        Spinning es un entrenamiento aeróbico, principalmente de piernas,
                        en el que se trabaja en grupo con un monitor que indica cambios
                        frecuentes de intensidad.
                    </h4>
                </a>
            </article>
        </section>
        <section class="actividad">
            <article class="left-container">
                <img src="imagenes/kickboxing.jpg" />
            </article>
            <article class="right-container">
                <h2 class="titulo-actividad">Kickboxing</h2>
                <a class="enlace" href="actividad3.php">
                    <h4 class="descripcion-actividad">
                        Kickboxing es un deporte de combate que combina las técnicas del
                        boxeo con las técnicas de patadas de algunas artes marciales como
                        kárate y muay thai.
                    </h4>
                </a>
            </article>
        </section>
        <section class="actividad">
            <article class="left-container">
                <img src="imagenes/crossfit.jpg" />
            </article>
            <article class="right-container">
                <h2 class="titulo-actividad">CrossFit</h2>
                <a class="enlace" href="actividad1.php">
                    <h4 class="descripcion-actividad">
                        CrossFit es una técnica de entrenamiento que encadena movimientos
                        de diferentes disciplinas al mismo tiempo, como halterofilia,
                        entrenamiento metabólico y gimnástico.
                    </h4>
                </a>
            </article>
        </section>
        <section class="actividad">
            <article class="left-container">
                <img src="imagenes/spinning.jpg" />
            </article>
            <article class="right-container">
                <h2 class="titulo-actividad">Spinning</h2>
                <a class="enlace" href="actividad2.php">
                    <h4 class="descripcion-actividad">
                        Spinning es un entrenamiento aeróbico, principalmente de piernas,
                        en el que se trabaja en grupo con un monitor que indica cambios
                        frecuentes de intensidad.
                    </h4>
                </a>
            </article>
        </section>
        <section class="actividad">
            <article class="left-container">
                <img src="imagenes/kickboxing.jpg" />
            </article>
            <article class="right-container">
                <h2 class="titulo-actividad">Kickboxing</h2>
                <a class="enlace" href="actividad3.php">
                    <h4 class="descripcion-actividad">
                        Kickboxing es un deporte de combate que combina las técnicas
                        del boxeo con las técnicas de patadas de algunas artes marciales
                        como kárate y muay thai.
                    </h4>
                </a>
            </article>
        </section>
    </section>
    <section class="body-container container-noticias">
        <section class="noticia">
            <article class="left-container">
                <img src="imagenes/noticia1.jpg" />
            </article>
            <article class="right-container">
                <h2 class="titulo-noticia">Campeones de fútbol 7</h2>
                <h4 class="subtitulo-noticia">El equipo del Centro Deportivo ha ganado el campeonato de fútbol 7. ¡Enhorabuena!</h4>
            </article>
        </section>
        <section class="noticia">
            <article class="left-container">
                <img src="imagenes/noticia2.jpg" />
            </article>
            <article class="right-container">
                <h2 class="titulo-noticia">Nuevas cintas de correr</h2>
                <h4 class="subtitulo-noticia">Se han adquirido nuevas cintas de correr para el gimnasio. ¡Pruébalas ya!</h4>
            </article>
        </section>
        <section class="noticia ultima-noticia">
            <article class="left-container">
                <img src="imagenes/noticia3.jpg" />
            </article>
            <article class="right-container">
                <h2 class="titulo-noticia">Clases de yoga ya disponibles</h2>
                <h4 class="subtitulo-noticia">¡Ya puedes apuntarte a clases de yoga en el Centro! Visita el horario para más información.</h4>
            </article>
        </section>
    </section>
</body>

<footer>
    <a class="enlace" href="contacto.php">Contacto</a>
    <a> - </a>
    <a class="enlace" href="como_se_hizo.pdf">Cómo se hizo</a>
</footer>
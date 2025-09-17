<?php require_once 'includes/conexion.php' ?>
<?php require_once 'includes/helpers.php' ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Crear, comparte y visualiza experiencias generales de reclamos a diferentes productos, empresas, personas, servicios y mucho más para prevenir situaciones no gratas a corto, mediano y largo plazo">
    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/678f51be9f.js" crossorigin="anonymous"></script>
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!--Favicon-->
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <!--Normalize.css-->
    <link rel="preload" href="./CSS/normalize.css">
    <link rel="stylesheet" href="./CSS/normalize.css">
    <!--Styles-->
    <link rel="preload" href="./CSS/styles.css">
    <link rel="stylesheet" href="./CSS/styles.css">
    <title>Misreclamos.com</title>
</head>

<body>
    <header class="barra-sticky">
        <section class="barra">
            <div class="logo-principal">
                <a href="./index.php"><img src="./img/logo.gif" alt=""></a>
            </div>
            <nav class="barra-navegacion mostrar-768px">
                <?php if (!isset($_SESSION['usuario'])) :  ?>
                    <a href="./nosotros.php">Nosotros</a>
                    <a href="./blog.php">Comentarios</a>
                    <a href="./ayuda.php">Ayuda</a>
                    <a href="./register.php">Registrar</a>
                <?php else : ?>
                    <a href="./mis-datos.php">Perfil</a>
                    <a href="./nosotros.php">Nosotros</a>
                    <a href="./blog.php">Comentarios</a>
                    <a href="./ayuda.php">Ayuda</a>
                    <a href="./cerrar.php">Salir</a>
                <?php endif; ?>
            </nav>
            <div class="centrar-texto barra-navegacion mostrar-768px">
                <?php if (!isset($_SESSION['usuario'])) :  ?>
                    <button type="button" class="open-modal" data-open="modal">Iniciar Sesión <i class="fas fa-sign-in-alt"></i></button>
                <?php else : ?>
                    <a href="./crear-entradas.php">Comentar</a>
                <?php endif; ?>
            </div>
            <form class="mostrar-768px" action="buscar.php" method="post">
                <input type="search" name="busqueda" id="" placeholder="Search">
            </form>
            <div class="traductor mostrar-768px">
                <!--Traductor-->
                <a id="google_translate_element" class="google"></a>
            </div>
            <div class="mostrar-128px boton-modal">
                <button type="button" class="open-modal" data-open="modal2">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </section>


        <!--Modal-->
        <div class="modal" id="modal" data-animation="slideInOutLeft">
            <div class="modal-dialog">
                <header class="modal-header">
                    <i class="fas fa-sign-in-alt"></i>
                    <button class="close-modal" aria-label="close modal" data-close>
                        ✕
                    </button>
                </header>
                <section class="modal-content">
                    <section class="fondo-blanco registro">
                        <form class="form-register" action="login.php" method="post">
                            <fieldset>
                                <legend>Inicio de Sesión</legend>
                                <div class="correo">
                                    <label for="correo">Correo Electrónico: <span>*</span></label>
                                    <input type="email" name="email" id="correo" required placeholder="Su correo">
                                </div>

                                <div class="password">
                                    <label for="contraseña">Contraseña: <span>*</span></label>
                                    <input type="password" name="password" id="contraseña">
                                </div>

                                <div class="texto-derecha">
                                    <button inputmode="submit">
                                        Iniciar Sesión
                                        <i class="fas fa-sign-in-alt"></i>
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </section>
                </section>
                <footer class="modal-footer">
                    <span>¿Usuario nuevo? <a href="./register.php">Registrar</a></span>
                </footer>
            </div>
        </div>
        <!--Moda2-->
        <div class="modal" id="modal2" data-animation="slideInOutLeft">
            <div class="modal-dialog-celular">
                <header class="modal-header">
                    <a href="./login-required.php">Iniciar Sesión</a>

                    <button class="close-modal" aria-label="close modal" data-close>
                        ✕
                    </button>
                </header>
                <section class="modal-content">
                    <form class="formulario-celular" action="buscar.php" method="post">
                        <input class="search" type="search" name="busqueda" id="" placeholder="Search">
                    </form>
                    <section class="enlaces-celular">
                        <?php if (isset($_SESSION['usuario'])) : ?>
                            <nav class="navegacion-celular">
                                <a href="./mis-datos.php">Perfil</a>
                                <a href="./blog.php">Comentarios</a>
                                <a href="./nosotros.php">Nosotros</a>
                                <a href="./ayuda.php">Ayuda</a>
                                <a href="./contacto.php">Contacto</a>
                                <a href="./cerrar.php">Salir</a>
                            </nav>
                        <?php endif; ?>

                        <?php if (!isset($_SESSION['usuario'])) : ?>
                            <nav class="navegacion-celular">
                                <a href="./blog.php">Comentarios</a>
                                <a href="./nosotros.php">Nosotros</a>
                                <a href="./ayuda.php">Ayuda</a>
                                <a href="./contacto.php">Contacto</a>
                            </nav>
                        <?php endif; ?>
                    </section>
                </section>
                <footer class="modal-footer">
                    <span>¿Usuario nuevo? <a href="./register.php">Registrar</a></span>
                </footer>
            </div>
        </div>


        <!--Google Translate-->
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'es',
                    includedLanguages: 'in,ca,eu,gl,en,fr,it,pt,de,hi,zh,vi,uk,tr,th,sv,sr,ru,pt,pl,fa,no,mg,lt,ko,ja,it,is,ga,hu,hc,fr,haw,cmn',
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                    gaTrack: true
                }, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        <script>
            const openEls = document.querySelectorAll("[data-open]");
            const closeEls = document.querySelectorAll("[data-close]");
            const isVisible = "is-visible";

            for (const el of openEls) {
                el.addEventListener("click", function() {
                    const modalId = this.dataset.open;
                    document.getElementById(modalId).classList.add(isVisible);
                });
            }

            for (const el of closeEls) {
                el.addEventListener("click", function() {
                    this.parentElement.parentElement.parentElement.classList.remove(isVisible);
                });
            }

            document.addEventListener("click", e => {
                if (e.target == document.querySelector(".modal.is-visible")) {
                    document.querySelector(".modal.is-visible").classList.remove(isVisible);
                }
            });

            document.addEventListener("keyup", e => {
                // if we press the ESC
                if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
                    document.querySelector(".modal.is-visible").classList.remove(isVisible);
                }
            });
        </script>
    </header>
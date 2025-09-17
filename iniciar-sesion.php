<?php require_once 'cabecera.php' ?>
<?php if (!isset($_SESSION['usuario'])) : ?>
    <section class="contenedor">
        <h2>El correo o la contraseña no son validos</h2>
        <p>Intentemos de nuevo, ingresa correctamente las credenciales</p>

        <form class="formulario" action="login.php" method="post">
            <div class="">
                <div class="correo">
                    <label for="correo">Correo electrónico:</label>
                    <input class="inputs" type="email" name="email" id="email">
                </div>

                <div class="password">
                    <label for="password">Contraseña:</label>
                    <input class="inputs" type="password" name="password" id="password">
                </div>
            </div>

            <button class="btn-general">Iniciar sesión</button>
            <div class="texto-derecha">
                <img src="./img/SSL-certificado.png" alt="">
            </div>
        </form>
        <div class="separador"></div>
    </section>
<?php endif; ?>

<?php if (isset($_SESSION['usuario'])) : ?>
    <section class="contenedor">
        <div class="dividir">
            <div class="setenta">

                <h2>Hola <?= $_SESSION['usuario']['nombre'] ?> </h2>
                <p>Te presentamos algunas acciones que podrás realizar en el sitio. Recuerda, si tienes algún problema puedes ir a sección de <a href="./ayuda.php">Ayuda</a> ó ponerte en contacto con nosotros</p>

                <div class="dividir alinear-vertical">
                    <div class="dos-partes accion centrar-texto">
                        <a href="./crear-entradas.php">
                            <p>Crear Comentarios</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle-2" width="72" height="72" viewBox="0 0 24 24" stroke-width="0.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" />
                                <line x1="12" y1="12" x2="12" y2="12.01" />
                                <line x1="8" y1="12" x2="8" y2="12.01" />
                                <line x1="16" y1="12" x2="16" y2="12.01" />
                            </svg>
                        </a>
                    </div>
                    <div class="dos-partes accion centrar-texto">
                        <a href="./blog.php">
                            <p>Ver Comentarios</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eyeglass-2" width="72" height="72" viewBox="0 0 24 24" stroke-width="0.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 4h-2l-3 10v2.5" />
                                <path d="M16 4h2l3 10v2.5" />
                                <line x1="10" y1="16" x2="14" y2="16" />
                                <circle cx="17.5" cy="16.5" r="3.5" />
                                <circle cx="6.5" cy="16.5" r="3.5" />
                            </svg>
                        </a>

                    </div>
                </div>

                <div class="dividir alinear-vertical">
                    <div class="dos-partes accion centrar-texto">
                        <a href="./ver-categorias.php">
                            <p>Ver Categorías</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-apps" width="72" height="72" viewBox="0 0 24 24" stroke-width="0.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="4" y="4" width="6" height="6" rx="1" />
                                <rect x="4" y="14" width="6" height="6" rx="1" />
                                <rect x="14" y="14" width="6" height="6" rx="1" />
                                <line x1="14" y1="7" x2="20" y2="7" />
                                <line x1="17" y1="4" x2="17" y2="10" />
                            </svg>
                        </a>
                    </div>
                    <div class="dos-partes accion centrar-texto">
                        <a href="./ver-categorias.php">
                            <p>Búsqueda avanzada</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-search" width="72" height="72" viewBox="0 0 24 24" stroke-width="0.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M12 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v4.5" />
                                <circle cx="16.5" cy="17.5" r="2.5" />
                                <line x1="18.5" y1="19.5" x2="21" y2="22" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
            <div class="treinta imagen-city">
                <h2>También te puede interesar</h2>

                <a href="https://oficiomaestro.com/index.php" target="_blank" rel="noopener noreferrer">
                    <div class="oficiomaestro">
                        <div class="contenido-oficiomaestro">
                            <p>oficiomaestro.com</p>
                            <p>Sitio para indagar o reportar a profesionistas y maestros de cualquier area</p>
                        </div>
                    </div>
                </a>

                <a href="https://miempleador.com/" target="_blank" rel="noopener noreferrer">
                    <div class="miempleador">
                        <div class="contenido-oficiomaestro">
                            <p>miempleador.com</p>
                            <p>Sitio para indagar a empleados y empleadores conociendo las experiencias de anteriores trabajadores o jefes</p>
                        </div>
                    </div>
                </a>

                <a href="https://miarrendador.com/index.php" target="_blank" rel="noopener noreferrer">
                    <div class="miarrendatario">
                        <div class="contenido-oficiomaestro">
                            <p>miarrendatario.com</p>
                            <p>Sitio para descubrir a arrendatarios y arrendadores conociendo las experiencias de anteriores inquilinos o dueños</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </section>
<?php endif; ?>
<?php require_once 'footer.php' ?>
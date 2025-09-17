</body>
<footer>
    <div class="">
        <div class="contenido-footer ">
            <div class="logo-principal contenedor">
                <a href="./index.php"><img src="./img/logo.gif" alt=""></a>
                <p>Sitio gratuito y de uso exclusivo para revisar y compartir experiencias</p>
            </div>
            <div class="contenedor">
                <p>Reclame con sus experiencias, descubra con las de otros ¿Tiene algún reclamo? Comente aquí sus experiencias y hagamos saber nuestras inconformidades que se tienen acerca de un servicio, empresa producto, persona y más</p>

                <div class="enlaces-footer ">
                    <div class="dividir">
                        <div class="tres-partes">
                            <strong>Principales</strong>
                            <a href="./nosotros.php">Nosotros</a>
                            <a href="./ayuda.php">Ayuda</a>
                            <a href="./blog.php">Comentarios</a>
                            <a href="./contacto.php">Contacto</a>
                        </div>
                        <div class="tres-partes">
                            <strong>Acciones</strong>
                            <?php if (isset($_SESSION['usuario'])) :  ?>
                                <a href="ver-categorias.php">Categorías</a>
                                <a href="mis-datos.php">Perfil</a>
                                <a href="crear-entradas.php">Crear comentarios</a>
                            <?php else: ?>
                                <a href="register.php">Crear Registro</a>
                                <a href="login-required.php">Iniciar Sesión</a>
                            <?php endif; ?>
                        </div>
                        <div class="tres-partes">
                            <strong>Seguridad</strong>
                            <a href="./privacidad.php">Aviso de Privacidad</a>
                            <a href="./privacidad.php">Términos y Condiciones</a>
                            <img src="./img/SSL-certificado.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="centrar-texto">
                <p>misreclamos.com <?php echo date('Y') ?>  &copy; Todos los derechos reservados  Este sitio fue diseñado por JAAC</p>
            </div>
            </div>
        </div>
    </div>
</footer>

</html>
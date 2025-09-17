<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
$entrada_actual = conseguirEntrada($db, $_GET['id']);
$entrada_actual2 = conseguirCategoriaMarcas($db, $_GET['id']);

if (!isset($entrada_actual['id'])) {
    header("Location: blog.php");
}
?>
<?php require_once 'cabecera.php'; ?>
<?php if (isset($_SESSION['usuario'])) : ?>
    <section class="site-crear">
        <div class="contenedor">
            <h2>Hola <strong><?= $_SESSION['usuario']['nombre'] ?></strong></h2>
            <p>Aquí podrás comentar de forma rápida los reclamos que tengas hacia una persona, empresa, marca, servicio y mucho más</p>
        </div>
    </section>

    <section class="contenedor">
        <div class="dividir">
            <div class="treinta instrucciones">
                <div class="mostrar-768px">
                    <p class="error">Ingrese su reclamo respetando los siguientes términos:</p>
                    <p>Todos los campos marcados con <span>*</span> son obligatorios</p>
                    <ul class="reglas">
                        <li>El sitió funge solo para reclamos no se permiten acciones que propicien a promocionar su propia marca</li>
                        <li>misreclamos.com no se hace responsable del o los comentarios publicados</li>
                        <li>Sus datos están protegidos y no se compartirán a ningún tercero sin su consentimiento</li>
                        <li>El usuario acepta que los datos son verídicos y los reclamos publicados serán por experiencias propias</li>
                        <li>La competencia desleal será sancionada con la eliminación automática del comentario</li>
                        <li>misreclamos.com es fiel a la libertad de expresión como las leyes y normas dictan. Se respetará las libertades de cada individuo hasta que empiecen los derechos y obligaciones de la otra persona. Por consiguiente debemos instar el correcto lenguaje y la NO discriminación racial, sexual ni otro tipo de violencia que denigre, humille u ofenda a la otra persona.</li>
                    </ul>
                </div>
            </div>

            <div class="setenta">
                <div class="centrar-texto">
                    <h3 class="mayus">Crear comentario</h3>
                </div>
                <div class="contenedor">
                    <form class="formulario" action="guardar-entrada.php?editar=<?= $entrada_actual['id'] ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="nombre_usuario" value="<?= $_SESSION['usuario']['nombre'] ?> ">

                        <div class="">
                            <label for="titulo">Nombre de la marca, empresa, servicio, persona...</label>
                            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>

                            <input class="inputs" type="text" id="titulo" name="titulo" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" value="<?= trim( $entrada_actual['titulo']) ?>">
                        </div>

                        <div class="">
                            <label for="">Seleccione una categoría</label>
                            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>

                            <select class="inputs" name="categoria" id="categoria">
                                <option selected value="<?=$entrada_actual['categoria_id'] ?>"><?=$entrada_actual['categoria'] ?></option>

                                <?php
                                $categorias = conseguirCategorias($db);
                                if (!empty($categorias)) :
                                    while ($categoria = mysqli_fetch_assoc($categorias)) :
                                ?>
                                        <option value="<?= $categoria['id'] ?>">
                                            <?= $categoria['nombre'] ?>
                                        </option>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </select>
                        </div>

                        <div class="">
                            <label for="tipo-reclamo">Tipo de Reclamo</label>
                            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'tipo_reclamo') : ''; ?>

                            <select class="inputs" name="tipo_reclamo" id="tipo-reclamo">
                                <option selected value="<?=$entrada_actual['tipo_reclamo'] ?>"><?=$entrada_actual['tipo_reclamo'] ?></option>
                                <option value="Empresa injusta">Empresa injusta</option>
                                <option value="Entrega a destiempo">Entrega a destiempo</option>
                                <option value="Estafa">Estafa</option>
                                <option value="Falsa publicidad/promesa">Falsa publicidad/promesa</option>
                                <option value="Falta de profesionalismo">Falta de profesionalismo</option>
                                <option value="Falta de ética">Falta de ética</option>
                                <option value="Fraude">Fraude</option>
                                <option value="Mal servicio">Mal servicio</option>
                                <option value="Mal producto">Mal producto</option>
                                <option value="Mal terminado">Mal terminado</option>
                                <option value="Mala atención">Mala atención</option>
                                <option value="Mala calidad">Mala calidad</option>
                                <option value="Muy caro">Muy caro</option>
                                <option value="Negligencia">Negligencia</option>
                                <option value="No cumple con mis expectativas">No cumple con mis expectativas</option>
                                <option value="Producto en mal estado">Producto en mal estado</option>
                                <option value="Injusticia">Injusticia</option>
                                <option value="Racismo">Racismo</option>
                                <option value="Robo">Robo</option>
                                <option value="Impuntualidad">Impuntualidad</option>
                                <option value="Caducado">Caducado</option>
                            </select>
                        </div>

                        <div class="">
                            <label for="titulo-comentario">Ingrese un titulo lo más breve posible</label>
                            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo_comentario') : ''; ?>

                            <input class="inputs" type="text" id="titulo-comentario" name="titulo_comentario" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" value="<?=$entrada_actual['titulo_comentario'] ?>">
                        </div>

                        <div class="">
                            <label for="descripcion">Redacte su comentario</label>
                            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>

                            <textarea name="descripcion"> <?=$entrada_actual['descripcion'] ?> </textarea>
                        </div>

                        <div class="">
                            <label for="">Anexe una imagen o varias</label>

                            <div class="dividir alinear-vertical">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="72" height="72" viewBox="0 0 24 24" stroke-width="0.5" stroke="#750921" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="15" y1="8" x2="15.01" y2="8" />
                                        <rect x="4" y="4" width="16" height="16" rx="3" />
                                        <path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" />
                                        <path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" />
                                    </svg>
                                </div>
                                <div class="">
                                    <input type="file" name="imagen" id="">
                                    <input type="file" name="imagen_2" id="">
                                </div>
                                <div class="">
                                    <input type="file" name="imagen_3" id="">
                                    <input type="file" name="imagen_4" id="">
                                </div>
                            </div>
                        </div>

                        <div class="texto-derecha">
                            <input type="submit" value="Comentar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (!isset($_SESSION['usuario'])) : ?>
    <section class="contenedor">
        <h2>Para desbloquear esta función es necesario un inicio de sesión correcto</h2>
        <p>Intentemos de nuevo, ingresa correctamente las credenciales o crea un registro <a href="./register.php">aquí</a></p>

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

            <input class="inputs" type="submit" value="Iniciar sesión">
            <div class="texto-derecha">
                <img src="./img/SSL-certificado.png" alt="">
            </div>
        </form>

        <div class="separador"></div>
    </section>
<?php endif; ?>
<?php borrarErrores() ?>
<?php require_once 'footer.php' ?>
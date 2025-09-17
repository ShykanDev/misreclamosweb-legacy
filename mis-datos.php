<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'cabecera.php'; ?>

<section class="site-header-datos">
	<div class="texto-site-datos">
		<div class="contenedor">
			<h3>Mi perfil</h3>
			<p>Puede editar su perfil, el único dato público será el Nombre</p>
		</div>
	</div>
</section>

<section class="contenedor formulario">
	<!--PERFIL PERSONA FÍSICA-->
	<?php if ($_SESSION['usuario']) : ?>
		<div class="dividir">
			<div class="cuarenta contacto">
				<fieldset>
					<legend>Datos del Perfil</legend>
					<form class="form-register" action="actualizar-usuario.php" method="POST">
						<?php if (isset($_SESSION['completado'])) : ?>
							<div class="exito">
								<?= $_SESSION['completado'] ?>
							</div>
						<?php elseif (isset($_SESSION['errores']['general'])) : ?>
							<div class="error">
								<?= $_SESSION['errores']['general'] ?>
							</div>
						<?php endif; ?>

						<div class="nombre">
							<label for="nombre">Nombre</label>
							<input class="inputs" type="text" name="nombre" value="<?= $_SESSION['usuario']['nombre']; ?>" />
							<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
						</div>

						<div class="apellidos">
							<label for="apellidos">Apellidos</label>
							<input class="inputs" type="text" name="apellidos" value="<?= $_SESSION['usuario']['apellidos']; ?>" />
							<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
						</div>

						<div class="email">
							<label for="email">Email</label>
							<input class="inputs" type="email" name="email" value="<?= $_SESSION['usuario']['email']; ?>" />
							<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
						</div>

						<div class="texto-derecha">
							<button class="btn-general"><i class="fas fa-save"></i> Actualizar Perfil </button>
						</div>
					</form>
				</fieldset>
			</div>
			<div class="sesenta">
				<div class="centrar-texto">
					<h4>Modificar datos</h4>
				</div>

				<div class="des-violencia">
					<div class="des-violencia-linea"></div>
					<h3 id="changa">Uso de Sus Datos</h3>
				</div>
				<p>Sus datos, sus decisiones. Los datos que usted ingrese solo se compartirán dentro de la página, tiene la opción de escoger que datos desea mostrar y cuales no. Solo es obligatorio mostrar el nombre de la empresa o persona.</p>
			</div>
		</div>
	<?php endif; ?>

	
</section>


<section class="mostrar">
	<div class="contenedor">
		<h3 class="fw-200" id="changa">¿Qué datos se utilizan?</h3>
		<div class="dividir alinear-vertical">
			<div class="dos-partes">
				<p id="changa">Su <strong>Nombre</strong> y <strong>Apellidos</strong></p>
				<p>Se utilizan para decir quien creo el comentario. Para cuidar su integridad, esta opción no se puede ocultar, pero si desea editar el nombre, puede editarlo creando un nickname.</p>

			</div>
			<div class="dos-partes">
				<p id="changa">Su <strong>Correo electrónico</strong></p>
				<p>Se recomienda no cambiarlo, se utilizará internamente en la página para acciones como recuperar contraseña, eliminar perfil y método para enviar correos de noticias entre otros. Su correo no se proporcionará a nadie sin su consentimiento.</p>
			</div>
		</div>
	</div>
</section>

<?php borrarErrores(); ?>


<div class="separador"></div>

<?php require_once 'footer.php'; ?>
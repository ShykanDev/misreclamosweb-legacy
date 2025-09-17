<?php require_once 'cabecera.php' ?>
<section class="contenedor">
    <h2>Para desbloquear esta función es necesario un inicio de sesión correcto</h2>
    <p>Intentemos de nuevo, ingresa correctamente las credenciales o crea un registro <a href="./register.php"><strong>aquí</strong></a></p>

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

        <div class="dividir alinear-vertical">
            <input type="submit" value="Iniciar sesión">

            <img src="./img/SSL-certificado.png" alt="">
        </div>
    </form>

    <div class="separador"></div>
</section>
<?php require_once 'footer.php' ?>
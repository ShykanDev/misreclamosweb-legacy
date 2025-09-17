<?php require_once 'cabecera.php' ?>
<section class="contenedor">
    <div class="site-contacto">
        <h1>Crear mensaje</h1>
        <p>Sea para una duda, sugerencia, comentario o apoyo</p>
        <h2 class="exito">Mensaje enviado correctamente</h2>
    </div>

    <div class="formulario">
        <form action="enviar-correo.php" method="POST">
            <div class="">
                <label for="nombre">Nombre:</label>
                <input class="inputs" type="text" name="nombre" id="nombre" placeholder="Su nombre">
            </div>

            <div class="">
                <label for="email">Correo Electrónico:</label>
                <input class="inputs" type="email" name="email" id="email" placeholder="Sus apellidos">
            </div>

            <div class="">
                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" id="mensaje" placeholder="Redacte su mensaje"></textarea>
            </div>

            <div class="robot">
                <label for="robot">¿Cuánto es 2 x 2?</label>
                <div class="evenly alinear-vertical">
                    <div class="flex alinear-vertical">
                        <label for="cuatro">4</label>
                        <input type="radio" name="robot" id="cuatro" value="4">
                    </div>

                    <div class="flex alinear-vertical">
                        <label for="tres">3</label>
                        <input type="radio" name="robot" id="tres" value="3">
                    </div>

                    <div class="flex alinear-vertical">
                        <label for="uno">1</label>
                        <input type="radio" name="robot" id="uno" value="1">
                    </div>
                </div>
            </div>

            <div class="">
                <input class="inputs" type="submit" value="Enviar mensaje">
            </div>
        </form>
    </div>
</section>
<?php require_once 'footer.php' ?>
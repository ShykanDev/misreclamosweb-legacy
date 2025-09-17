<?php require_once 'cabecera.php'; ?>
<?php
$entradas = conseguirEntrada($db, $_GET['id']);
?>
    <?php if (isset($_SESSION['usuario'])) : ?>
        <div class="contenedor">
            <div class="cuadro-a">
                <h2 id="changa">Antes de confirmar</h2>
                <p>Revise su comentario, puede editarlo eliminarlo o confirmarlo. Es importante que los datos ingresados sean verídicos y correctos. </p>
                <span>Los comentarios alojados enel sitio son propiedad exclusiva del usuario/usuaria que los crea. Por lo cual, la autoría y manejo del comentario son responsabilidad del propietario del comentario. Esta página y sus derivadas no asumen ninguna responsabilidad por los comentarios creados en el sitio </span>

                <div class="centrar-texto">
                    <a class="btn-general" href="entrada-final.php?id=<?= $entradas['id'] ?>">Pre-visualizar</a>
                </div>
            </div>
        </div>

        <div class="separador"></div>
    <?php endif; ?>

<?php require_once 'footer.php' ?>
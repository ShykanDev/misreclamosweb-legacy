<?php require_once 'cabecera.php' ?>
<section class="site-mostrar-categorias">
    <div class="contenedor">
        <h1>Filtra por categorías o busca por nombre de la empresa, servicio o producto</h1>
        <p>Podrás indagar advertencias, sugerencias y recomendaciones</p>
    </div>
</section>
<section class="contenedor">
    <div class="mostrar-categorias">
        <?php
        $categorias = conseguirCategorias($db);
        if (!empty($categorias)) :
            while ($categoria = mysqli_fetch_assoc($categorias)) :
        ?>
                <a href="categoria.php?id=<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></a>
        <?php
            endwhile;
        endif;
        ?>
    </div>

</section>

<section class="section-buscar">
    <div class="contenedor">
        <h2>Busca por nombre de la marca</h2>
        <form class="formulario" action="buscar.php" method="post">
            <input class="inputs" type="search" name="busqueda" id="" placeholder="COCA-COLA, APPLE, SAMSUNG, FEDEX, ESTAFETA, ZARA, PRADA, AMAZON, NETFLIX, DOMINOS">
            <div class="centrar-texto">
                <input type="submit" value="Buscar">
            </div>
        </form>
    </div>
</section>


<?php require_once 'footer.php' ?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
$entrada_actual = conseguirEntrada($db, $_GET['id']);
if (!isset($entrada_actual['id'])) {
}
?>

<?php require_once 'cabecera.php' ?>
<?php if (isset($_SESSION['usuario'])) : ?>
    <section class="contenedor">
        <h2 class="mayus">Visualización del comentario</h2>
        <p>Así se mostrara el comentario completo. Podrás eliminarlo, editarlo o confirmar su publicación</p>
    </section>

    <section class="contenedor">
        <div class="dividir alinear-vertical">

            <div class="treinta">
                <div class="barra-lateral centrar-texto">
                    <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']) : ?>
                        <div class="botones-acciones">
                            <!--Botones Editar y Eliminar-->
                            <a class="btn-general" href="editar-entrada.php?id=<?= $entrada_actual['id'] ?>"> <i class="fas fa-edit"></i> Editar comentario</a>

                            <a class="btn-general" href="borrar-entrada.php?id=<?= $entrada_actual['id'] ?>"><i class="fas fa-trash-alt"></i> Eliminar comentario</a>

                            <a class="btn-general" href="./blog.php"><i class="fas fa-comment-medical"></i> Confirmar comentario</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="setenta">
                <article class="comentario">
                    <div class="dividir alinear-vertical">
                        <div class="datos">
                            <?= $entrada_actual['fecha'] ?> /
                            <?= $entrada_actual['nombre_usuario'] ?>
                        </div>
                        <div class="motivo">
                            <?= $entrada_actual['tipo_reclamo'] ?>
                        </div>
                    </div>

                    <div class="dividir alinear-vertical">
                        <div class="nombre-marca">
                            <?= $entrada_actual['titulo'] ?>
                        </div>

                        <!--Sección de Logos-->
                        <div class="logo-marca">
                            <!--3M-->
                            <?php if ($entrada_actual['titulo'] == "3M" || $entrada_actual['titulo'] == "TRESM") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/3m.png" alt="3M Icon">
                                </div>
                            <?php endif; ?>

                            <!--7-eleven-->
                            <?php if ($entrada_actual['titulo'] == "7ELEVEN" || $entrada_actual['titulo'] == "7 ELEVEN" || $entrada_actual['titulo'] == "SEVEN ELEVEN") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/7-eleven.png" alt="7-eleven Icon">
                                </div>
                            <?php endif; ?>

                            <!--99minutos-->
                            <?php if ($entrada_actual['titulo'] == "99MINUTOS" || $entrada_actual['titulo'] == "NOVENTA Y NUEVE MINUTOS" || $entrada_actual['titulo'] == "NOVENTAYNUEVEMINUTOS" || $entrada_actual['titulo'] == "99 MINUTOS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/99minutos.png" alt="99minutos Icon">
                                </div>
                            <?php endif; ?>

                            <!--adata-->
                            <?php if ($entrada_actual['titulo'] == "ADATA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/adata.png" alt="adata Icon">
                                </div>
                            <?php endif; ?>

                            <!--adidas-->
                            <?php if ($entrada_actual['titulo'] == "ADIDAS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/adidas.png" alt="adidas Icon">
                                </div>
                            <?php endif; ?>

                            <!--adobe-->
                            <?php if ($entrada_actual['titulo'] == "ADOBE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/adobe.png" alt="adobe Icon">
                                </div>
                            <?php endif; ?>

                            <!--aeromexico-->
                            <?php if ($entrada_actual['titulo'] == "AEROMEXICO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/aeromexico.png" alt="aeromexico Icon">
                                </div>
                            <?php endif; ?>

                            <!--aeropostale-->
                            <?php if ($entrada_actual['titulo'] == "AEROPOSTALE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/aeropostale.png" alt="aeropostale Icon">
                                </div>
                            <?php endif; ?>

                            <!--afirme-->
                            <?php if ($entrada_actual['titulo'] == "AFIRME") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/afirme.png" alt="afirme Icon">
                                </div>
                            <?php endif; ?>

                            <!--airbnb-->
                            <?php if ($entrada_actual['titulo'] == "AIRBNB") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/airbnb.png" alt="airbnb Icon">
                                </div>
                            <?php endif; ?>

                            <!--allianz-->
                            <?php if ($entrada_actual['titulo'] == "ALLIANZ") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/allianz.png" alt="allianz Icon">
                                </div>
                            <?php endif; ?>

                            <!--alliexpress-->
                            <?php if ($entrada_actual['titulo'] == "ALIEXPRESS" || $entrada_actual['titulo'] == "ALLIEXPRESS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/alliexpress.png" alt="alliexpress Icon">
                                </div>
                            <?php endif; ?>

                            <!--almex-->
                            <?php if ($entrada_actual['titulo'] == "ALMEX") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/almex.png" alt="almex Icon">
                                </div>
                            <?php endif; ?>

                            <!--alpura-->
                            <?php if ($entrada_actual['titulo'] == "ALPURA" || $entrada_actual['titulo'] == "LECHE ALPURA" || $entrada_actual['titulo'] == "CREMA ALPURA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/alpura.png" alt="alpura Icon">
                                </div>
                            <?php endif; ?>

                            <!--amazon-->
                            <?php if ($entrada_actual['titulo'] == "AMAZON" || $entrada_actual['titulo'] == "PAQUETERIA AMAZON" || $entrada_actual['titulo'] == "AMAZON PRIME" || $entrada_actual['titulo'] == "AMAZON MUSIC" || $entrada_actual['titulo'] == "PRIME VIDEO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/amazon.png" alt="amazon Icon">
                                </div>
                            <?php endif; ?>

                            <!--amd-->
                            <?php if ($entrada_actual['titulo'] == "AMD") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/amd.png" alt="amd Icon">
                                </div>
                            <?php endif; ?>

                            <!--american-express-->
                            <?php if ($entrada_actual['titulo'] == "AMERICAN EXPRESS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/american-express.png" alt="american-express Icon">
                                </div>
                            <?php endif; ?>

                            <!--aon-->
                            <?php if ($entrada_actual['titulo'] == "AON") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/aon.png" alt="aon Icon">
                                </div>
                            <?php endif; ?>

                            <!--Apple-->
                            <?php if ($entrada_actual['titulo'] == "APPLE" || $entrada_actual['titulo'] == "APLE" || $entrada_actual['titulo'] == "IPHONE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/apple.png" alt="Apple Icon">
                                </div>
                            <?php endif; ?>

                            <!--argos-->
                            <?php if ($entrada_actual['titulo'] == "ARGOS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/argos.png" alt="argos Icon">
                                </div>
                            <?php endif; ?>

                            <!--asisa-->
                            <?php if ($entrada_actual['titulo'] == "ASISA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/asisa.png" alt="asisa Icon">
                                </div>
                            <?php endif; ?>

                            <!--astra-zeneca-->
                            <?php if ($entrada_actual['titulo'] == "ASTRA ZENECA" || $entrada_actual['titulo'] == "ASTRA-ZENECA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/astra-zeneca.png" alt="astra-zeneca Icon">
                                </div>
                            <?php endif; ?>

                            <!--asus-->
                            <?php if ($entrada_actual['titulo'] == "ASUS" || $entrada_actual['titulo'] == "COMPUTADORA ASUS" || $entrada_actual['titulo'] == "LAPTOP ASUS" || $entrada_actual['titulo'] == "CELULAR ASUS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/asus.png" alt="asus Icon">
                                </div>
                            <?php endif; ?>

                            <!--at&t-->
                            <?php if ($entrada_actual['titulo'] == "AT&T" || $entrada_actual['titulo'] == "ATT" || $entrada_actual['titulo'] == "ATANDT") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/at&t.png" alt="at&t Icon">
                                </div>
                            <?php endif; ?>

                            <!--audi-->
                            <?php if ($entrada_actual['titulo'] == "AUDI" || $entrada_actual['titulo'] == "CARROS AUDI") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/audi.png" alt="audi Icon">
                                </div>
                            <?php endif; ?>

                            <!--axa-->
                            <?php if ($entrada_actual['titulo'] == "AXA" || $entrada_actual['titulo'] == "ASEGURADORA AXA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/axa.png" alt="axa Icon">
                                </div>
                            <?php endif; ?>

                            <!--balenciaga-->
                            <?php if ($entrada_actual['titulo'] == "BALENCIAGA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/balenciaga.png" alt="balenciaga Icon">
                                </div>
                            <?php endif; ?>

                            <!--banamex-->
                            <?php if ($entrada_actual['titulo'] == "BANAMEX") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/banamex.png" alt="banamex Icon">
                                </div>
                            <?php endif; ?>

                            <!--banana-republic-->
                            <?php if ($entrada_actual['titulo'] == "BANANA REPUBLIC") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/banana-republic.png" alt="banana-republic Icon">
                                </div>
                            <?php endif; ?>

                            <!--banbajio-->
                            <?php if ($entrada_actual['titulo'] == "BANBAJIO" || $entrada_actual['titulo'] == "BANCO BANBAJIO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/banbajio.png" alt="banbajio Icon">
                                </div>
                            <?php endif; ?>

                            <!--banco-azteca-->
                            <?php if ($entrada_actual['titulo'] == "BANCO AZTECA" || $entrada_actual['titulo'] == "AZTECA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/banco-azteca.png" alt="banco-azteca Icon">
                                </div>
                            <?php endif; ?>

                            <!--banco-de-chile-->
                            <?php if ($entrada_actual['titulo'] == "BANCO DE CHILE" || $entrada_actual['titulo'] == "BANCO CHILE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/banco-de-chile.png" alt="banco-de-chile Icon">
                                </div>
                            <?php endif; ?>

                            <!--banco-de-mexico-->
                            <?php if ($entrada_actual['titulo'] == "BANCO DE MEXICO" || $entrada_actual['titulo'] == "BANCO MEXICO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/banco-de-mexico.png" alt="banco-de-mexico Icon">
                                </div>
                            <?php endif; ?>

                            <!--banco-estado-->
                            <?php if ($entrada_actual['titulo'] == "BANCOESTADO" || $entrada_actual['titulo'] == "BANCO ESTADO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/banco-estado.png" alt="banco-estado Icon">
                                </div>
                            <?php endif; ?>

                            <!--bancolombia-->
                            <?php if ($entrada_actual['titulo'] == "BANCOLOMBIA" || $entrada_actual['titulo'] == "BANCO DE COLOMBIA" || $entrada_actual['titulo'] == "BANCO COLOMBIA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/bancolombia.png" alt="bancolombia Icon">
                                </div>
                            <?php endif; ?>

                            <!--bancomer-->
                            <?php if ($entrada_actual['titulo'] == "BANCOMER" || $entrada_actual['titulo'] == "BANCO BANCOMER" || $entrada_actual['titulo'] == "BANCO DE BANCOMER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/bancomer.png" alt="bancomer Icon">
                                </div>
                            <?php endif; ?>

                            <!--bancoppel-->
                            <?php if ($entrada_actual['titulo'] == "BANCOPPEL" || $entrada_actual['titulo'] == "BANCO BANCOPPEL" || $entrada_actual['titulo'] == "BANCO DE BANCOPPEL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/bancoppel.png" alt="bancoppel Icon">
                                </div>
                            <?php endif; ?>

                            <!--bandai-->
                            <?php if ($entrada_actual['titulo'] == "BANDAI" || $entrada_actual['titulo'] == "BANDAI JUGUETES" || $entrada_actual['titulo'] == "JUGUETES BANDAI") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/bandai.png" alt="bandai Icon">
                                </div>
                            <?php endif; ?>

                            <!--banorte-->
                            <?php if ($entrada_actual['titulo'] == "BANORTE" || $entrada_actual['titulo'] == "BANCO BANORTE" || $entrada_actual['titulo'] == "BANORTE BANCO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/banorte.png" alt="banorte Icon">
                                </div>
                            <?php endif; ?>

                            <!--barbie-->
                            <?php if ($entrada_actual['titulo'] == "BARBIE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/barbie.png" alt="barbie Icon">
                                </div>
                            <?php endif; ?>

                            <!--barcel-->
                            <?php if ($entrada_actual['titulo'] == "BARCEL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/barcel.png" alt="barcel Icon">
                                </div>
                            <?php endif; ?>

                            <!--bayer-->
                            <?php if ($entrada_actual['titulo'] == "BAYER" || $entrada_actual['titulo'] == "FARMACEUTICA BAYER" || $entrada_actual['titulo'] == "FARMACIA BAYER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/bayer.png" alt="bayer Icon">
                                </div>
                            <?php endif; ?>

                            <!--beat-->
                            <?php if ($entrada_actual['titulo'] == "BEAT") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/beat.png" alt="beat Icon">
                                </div>
                            <?php endif; ?>

                            <!--benq-->
                            <?php if ($entrada_actual['titulo'] == "BENQ") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/benq.png" alt="benq Icon">
                                </div>
                            <?php endif; ?>

                            <!--bentley-->
                            <?php if ($entrada_actual['titulo'] == "BENTLEY") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/bentley.png" alt="bentley Icon">
                                </div>
                            <?php endif; ?>

                            <!--berger-->
                            <?php if ($entrada_actual['titulo'] == "BERGER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/berger.png" alt="berger Icon">
                                </div>
                            <?php endif; ?>

                            <!--bimbo-->
                            <?php if ($entrada_actual['titulo'] == "BIMBO" || $entrada_actual['titulo'] == "GRUPO BIMBO" || $entrada_actual['titulo'] == "PAN BIMBO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/bimbo.png" alt="bimbo Icon">
                                </div>
                            <?php endif; ?>

                            <!--bizarro-->
                            <?php if ($entrada_actual['titulo'] == "BIZARRO" || $entrada_actual['titulo'] == "JOYERÍA BIZARRO" || $entrada_actual['titulo'] == "JOYERIA BIZARRO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/bizarro.png" alt="bizarro Icon">
                                </div>
                            <?php endif; ?>

                            <!--bizarro-->
                            <?php if ($entrada_actual['titulo'] == "BIZARRO" || $entrada_actual['titulo'] == "JOYERÍA BIZARRO" || $entrada_actual['titulo'] == "JOYERIA BIZARRO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/bizarro.png" alt="bizarro Icon">
                                </div>
                            <?php endif; ?>

                            <!--bmw-->
                            <?php if ($entrada_actual['titulo'] == "BMW" || $entrada_actual['titulo'] == "CARRO BMW" || $entrada_actual['titulo'] == "MOTO BMW") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/bmw.png" alt="bmw Icon">
                                </div>
                            <?php endif; ?>

                            <!--bodega-aurrera-->
                            <?php if ($entrada_actual['titulo'] == "BODEGA AURRERA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/bodega-aurrera.png" alt="bodega-aurrera Icon">
                                </div>
                            <?php endif; ?>

                            <!--boing-->
                            <?php if ($entrada_actual['titulo'] == "BOING") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/boing.png" alt="boing Icon">
                                </div>
                            <?php endif; ?>

                            <!--bonafont-->
                            <?php if ($entrada_actual['titulo'] == "BONAFONT") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/bonafont.png" alt="bonafont Icon">
                                </div>
                            <?php endif; ?>

                            <!--booking.com-->
                            <?php if ($entrada_actual['titulo'] == "BOOKING.COM" || $entrada_actual['titulo'] == "BOOKING") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/booking.com.png" alt="booking.com Icon">
                                </div>
                            <?php endif; ?>

                            <!--bosch-->
                            <?php if ($entrada_actual['titulo'] == "BOSCH") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/bosch.png" alt="bosch Icon">
                                </div>
                            <?php endif; ?>

                            <!--bose-->
                            <?php if ($entrada_actual['titulo'] == "BOSE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/bose.png" alt="bose Icon">
                                </div>
                            <?php endif; ?>

                            <!--boss-->
                            <?php if ($entrada_actual['titulo'] == "BOSS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/boss.png" alt="boss Icon">
                                </div>
                            <?php endif; ?>

                            <!--bridgestone-->
                            <?php if ($entrada_actual['titulo'] == "BRIDGESTONE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/bridgestone.png" alt="bridgestone Icon">
                                </div>
                            <?php endif; ?>

                            <!--brother-->
                            <?php if ($entrada_actual['titulo'] == "BROTHER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/brother.png" alt="brother Icon">
                                </div>
                            <?php endif; ?>

                            <!--burguer-king-->
                            <?php if ($entrada_actual['titulo'] == "BURGUER KING") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/burguer-king.png" alt="burguer-king Icon">
                                </div>
                            <?php endif; ?>

                            <!--c&a-->
                            <?php if ($entrada_actual['titulo'] == "C&A" || $entrada_actual['titulo'] == "C AND A") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/c&a.png" alt="c&a Icon">
                                </div>
                            <?php endif; ?>

                            <!--cabify-->
                            <?php if ($entrada_actual['titulo'] == "CABIFY") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/cabify.png" alt="cabify Icon">
                                </div>
                            <?php endif; ?>

                            <!--canon-->
                            <?php if ($entrada_actual['titulo'] == "CANON") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/canon.png" alt="canon Icon">
                                </div>
                            <?php endif; ?>

                            <!--carls-jr-->
                            <?php if ($entrada_actual['titulo'] == "carls-jr") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/carls-jr.png" alt="carls-jr Icon">
                                </div>
                            <?php endif; ?>

                            <!--carso-->
                            <?php if ($entrada_actual['titulo'] == "CARSO" || $entrada_actual['titulo'] == "GRUPO CARSO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/carso.png" alt="carso Icon">
                                </div>
                            <?php endif; ?>

                            <!--casio-->
                            <?php if ($entrada_actual['titulo'] == "CASIO" || $entrada_actual['titulo'] == "RELOJ CASIO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/casio.png" alt="casio Icon">
                                </div>
                            <?php endif; ?>

                            <!--cemento-cruz-azul-->
                            <?php if ($entrada_actual['titulo'] == "CEMENTO CRUZ AZUL" || $entrada_actual['titulo'] == "CRUZ AZUL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/cemento-cruz-azul.png" alt="cemento-cruz-azul Icon">
                                </div>
                            <?php endif; ?>

                            <!--cerwin-vega-->
                            <?php if ($entrada_actual['titulo'] == "CERWIN VEGA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/cerwin-vega.png" alt="cerwin-vega Icon">
                                </div>
                            <?php endif; ?>

                            <!--cfe-->
                            <?php if ($entrada_actual['titulo'] == "CFE" || $entrada_actual['titulo'] == "COMISIÓN FEDERAL DE ELECTRICIDAD" || $entrada_actual['titulo'] == "COMISION FEDERAL DE ELECTRICIDAD") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/cfe.png" alt="cfe Icon">
                                </div>
                            <?php endif; ?>

                            <!--chanel-->
                            <?php if ($entrada_actual['titulo'] == "CHANEL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/chanel.png" alt="chanel Icon">
                                </div>
                            <?php endif; ?>

                            <!--chedraui-->
                            <?php if ($entrada_actual['titulo'] == "CHEDRAUI") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/chedraui.png" alt="chedraui Icon">
                                </div>
                            <?php endif; ?>

                            <!--chilexpress-->
                            <?php if ($entrada_actual['titulo'] == "CHILEXPRESS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/chilexpress.png" alt="chilexpress Icon">
                                </div>
                            <?php endif; ?>

                            <!--chrysler-->
                            <?php if ($entrada_actual['titulo'] == "CHRYSLER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/chrysler.png" alt="chrysler Icon">
                                </div>
                            <?php endif; ?>

                            <!--chubb-->
                            <?php if ($entrada_actual['titulo'] == "CHUBB") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/chubb.png" alt="chubb Icon">
                                </div>
                            <?php endif; ?>

                            <!--cisco-->
                            <?php if ($entrada_actual['titulo'] == "CISCO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/cisco.png" alt="cisco Icon">
                                </div>
                            <?php endif; ?>

                            <!--clorox-->
                            <?php if ($entrada_actual['titulo'] == "CLOROX") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/clorox.png" alt="clorox Icon">
                                </div>
                            <?php endif; ?>

                            <!--coca-cola-->
                            <?php if ($entrada_actual['titulo'] == "COCA-COLA" || $entrada_actual['titulo'] == "COCA COLA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/coca-cola.png" alt="coca-cola Icon">
                                </div>
                            <?php endif; ?>

                            <!--condusef-->
                            <?php if ($entrada_actual['titulo'] == "CONDUSEF") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/condusef.png" alt="condusef Icon">
                                </div>
                            <?php endif; ?>

                            <!--consalud-->
                            <?php if ($entrada_actual['titulo'] == "CONSALUD") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/consalud.png" alt="consalud Icon">
                                </div>
                            <?php endif; ?>

                            <!--continental-->
                            <?php if ($entrada_actual['titulo'] == "CONTINENTAL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/continental.png" alt="continental Icon">
                                </div>
                            <?php endif; ?>

                            <!--converse-->
                            <?php if ($entrada_actual['titulo'] == "CONVERSE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/converse.png" alt="converse Icon">
                                </div>
                            <?php endif; ?>

                            <!--coppel-->
                            <?php if ($entrada_actual['titulo'] == "COPPEL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/coppel.png" alt="coppel Icon">
                                </div>
                            <?php endif; ?>

                            <!--correos-de-mexico-->
                            <?php if ($entrada_actual['titulo'] == "CORREOS DE MEXICO" || $entrada_actual['titulo'] == "CORREOS DE MÉXICO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/correos-de-mexico.png" alt="correos-de-mexico Icon">
                                </div>
                            <?php endif; ?>

                            <!--costco-->
                            <?php if ($entrada_actual['titulo'] == "COSTCO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/costco.png" alt="costco Icon">
                                </div>
                            <?php endif; ?>

                            <!--crunchyroll-->
                            <?php if ($entrada_actual['titulo'] == "CRUNCHYROLL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/crunchyroll.png" alt="crunchyroll Icon">
                                </div>
                            <?php endif; ?>

                            <!--danone-->
                            <?php if ($entrada_actual['titulo'] == "DANONE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/danone.png" alt="danone Icon">
                                </div>
                            <?php endif; ?>

                            <!--dell-->
                            <?php if ($entrada_actual['titulo'] == "DELL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/dell.png" alt="dell Icon">
                                </div>
                            <?php endif; ?>

                            <!--dewalt-->
                            <?php if ($entrada_actual['titulo'] == "DEWALT") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/dewalt.png" alt="dewalt Icon">
                                </div>
                            <?php endif; ?>

                            <!--dhl-->
                            <?php if ($entrada_actual['titulo'] == "DHL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/dhl.png" alt="dhl Icon">
                                </div>
                            <?php endif; ?>

                            <!--didi-->
                            <?php if ($entrada_actual['titulo'] == "DIDI" || $entrada_actual['titulo'] == "DIDI FOOD" || $entrada_actual['titulo'] == "DIDI ENTREGA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/didi.png" alt="didi Icon">
                                </div>
                            <?php endif; ?>

                            <!--dior-->
                            <?php if ($entrada_actual['titulo'] == "DIOR") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/dior.png" alt="dior Icon">
                                </div>
                            <?php endif; ?>

                            <!--disney-->
                            <?php if ($entrada_actual['titulo'] == "DISNEY" || $entrada_actual['titulo'] == "DISNEY PLUS" || $entrada_actual['titulo'] == "DISNEY +") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/disney.png" alt="disney Icon">
                                </div>
                            <?php endif; ?>

                            <!--dodge-->
                            <?php if ($entrada_actual['titulo'] == "DODGE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/dodge.png" alt="dodge Icon">
                                </div>
                            <?php endif; ?>

                            <!--dominos-->
                            <?php if ($entrada_actual['titulo'] == "DOMINOS" || $entrada_actual['titulo'] == "DOMINO'S") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/dominos.png" alt="dominos Icon">
                                </div>
                            <?php endif; ?>

                            <!--dostavista-->
                            <?php if ($entrada_actual['titulo'] == "DOSTAVISTA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/dostavista.png" alt="dostavista Icon">
                                </div>
                            <?php endif; ?>

                            <!--dove-->
                            <?php if ($entrada_actual['titulo'] == "DOVE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/dove.png" alt="dove Icon">
                                </div>
                            <?php endif; ?>

                            <!--dr.martens-->
                            <?php if ($entrada_actual['titulo'] == "DR.MARTENS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/dr.martens.png" alt="dr.martens Icon">
                                </div>
                            <?php endif; ?>

                            <!--ebay-->
                            <?php if ($entrada_actual['titulo'] == "EBAY") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/ebay.png" alt="ebay Icon">
                                </div>
                            <?php endif; ?>

                            <!--el-aguila-->
                            <?php if ($entrada_actual['titulo'] == "EL AGUILA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/el-aguila.png" alt="el-aguila Icon">
                                </div>
                            <?php endif; ?>

                            <!--elektra-->
                            <?php if ($entrada_actual['titulo'] == "ELEKTRA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/elektra.png" alt="elektra Icon">
                                </div>
                            <?php endif; ?>

                            <!--emirates-->
                            <?php if ($entrada_actual['titulo'] == "EMIRATES") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/emirates.png" alt="emirates Icon">
                                </div>
                            <?php endif; ?>

                            <!--epson-->
                            <?php if ($entrada_actual['titulo'] == "EPSON") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/epson.png" alt="epson Icon">
                                </div>
                            <?php endif; ?>

                            <!--esso-->
                            <?php if ($entrada_actual['titulo'] == "ESSO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/esso.png" alt="esso Icon">
                                </div>
                            <?php endif; ?>

                            <!--estafeta-->
                            <?php if ($entrada_actual['titulo'] == "ESTAFETA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/estafeta.png" alt="estafeta Icon">
                                </div>
                            <?php endif; ?>

                            <!--facebook-->
                            <?php if ($entrada_actual['titulo'] == "FACEBOOK") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/facebook.png" alt="facebook Icon">
                                </div>
                            <?php endif; ?>

                            <!--falabella-->
                            <?php if ($entrada_actual['titulo'] == "FALABELLA" || $entrada_actual['titulo'] == "FALABELLA.COM") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/falabella.png" alt="falabella Icon">
                                </div>
                            <?php endif; ?>

                            <!--farmacia-benavides-->
                            <?php if ($entrada_actual['titulo'] == "FARMACIAS BENAVIDES" || $entrada_actual['titulo'] == "BENAVIDES") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/farmacia-benavides.png" alt="farmacia-benavides Icon">
                                </div>
                            <?php endif; ?>

                            <!--farmacia-guadalajara-->
                            <?php if ($entrada_actual['titulo'] == "FARMACIAS GUADALAJARA" || $entrada_actual['titulo'] == "SUPER FARMACIA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/farmacia-guadalajara.png" alt="farmacia-guadalajara Icon">
                                </div>
                            <?php endif; ?>

                            <!--farmacia-paris-->
                            <?php if ($entrada_actual['titulo'] == "FARMACIAS PARIS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/farmacia-paris.png" alt="farmacia-paris Icon">
                                </div>
                            <?php endif; ?>

                            <!--farmacia-san-pablo-->
                            <?php if ($entrada_actual['titulo'] == "FARMACIA SAN PABLO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/farmacia-san-pablo.png" alt="farmacia-san-pablo Icon">
                                </div>
                            <?php endif; ?>

                            <!--farmacias-del-ahorro-->
                            <?php if ($entrada_actual['titulo'] == "FARMACIAS DEL AHORRO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/farmacias-del-ahorro.png" alt="farmacias-del-ahorro Icon">
                                </div>
                            <?php endif; ?>

                            <!--farmapronto-->
                            <?php if ($entrada_actual['titulo'] == "FARMAPRONTO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/farmapronto.png" alt="farmapronto Icon">
                                </div>
                            <?php endif; ?>

                            <!--fedex-->
                            <?php if ($entrada_actual['titulo'] == "FEDEX") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/fedex.png" alt="fedex Icon">
                                </div>
                            <?php endif; ?>

                            <!--ferrari-->
                            <?php if ($entrada_actual['titulo'] == "FERRARI") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/ferrari.png" alt="ferrari Icon">
                                </div>
                            <?php endif; ?>

                            <!--fiat-->
                            <?php if ($entrada_actual['titulo'] == "FIAT") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/fiat.png" alt="fiat Icon">
                                </div>
                            <?php endif; ?>

                            <!--fiesta-americana-->
                            <?php if ($entrada_actual['titulo'] == "FIESTA AMERICANA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/fiesta-americana.png" alt="fiesta-americana Icon">
                                </div>
                            <?php endif; ?>

                            <!--fiesta-inn-->
                            <?php if ($entrada_actual['titulo'] == "FIESTA INN") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/fiesta-inn.png" alt="fiesta-inn Icon">
                                </div>
                            <?php endif; ?>

                            <!--firestone-->
                            <?php if ($entrada_actual['titulo'] == "FIRESTONE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/firestone.png" alt="firestone Icon">
                                </div>
                            <?php endif; ?>

                            <!--fisher-price-->
                            <?php if ($entrada_actual['titulo'] == "FISHER-PRICE" || $entrada_actual['titulo'] == "FISHER PRICE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/fisher-price.png" alt="fisher-price Icon">
                                </div>
                            <?php endif; ?>

                            <!--flexi-->
                            <?php if ($entrada_actual['titulo'] == "FLEXI") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/flexi.png" alt="flexi Icon">
                                </div>
                            <?php endif; ?>

                            <!--ford-->
                            <?php if ($entrada_actual['titulo'] == "FORD") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/ford.png" alt="ford Icon">
                                </div>
                            <?php endif; ?>

                            <!--fud-->
                            <?php if ($entrada_actual['titulo'] == "FUD") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/fud.png" alt="fud Icon">
                                </div>
                            <?php endif; ?>

                            <!--g500-->
                            <?php if ($entrada_actual['titulo'] == "G500") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/g500.png" alt="g500 Icon">
                                </div>
                            <?php endif; ?>

                            <!--gamesa-->
                            <?php if ($entrada_actual['titulo'] == "GAMESA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/gamesa.png" alt="gamesa Icon">
                                </div>
                            <?php endif; ?>

                            <!--gap-->
                            <?php if ($entrada_actual['titulo'] == "GAP") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/gap.png" alt="gap Icon">
                                </div>
                            <?php endif; ?>

                            <!--general-de-salud-->
                            <?php if ($entrada_actual['titulo'] == "GENERAL DE SALUD") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/general-de-salud.png" alt="general-de-salud Icon">
                                </div>
                            <?php endif; ?>

                            <!--givenchy-->
                            <?php if ($entrada_actual['titulo'] == "GIVENCHY") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/givenchy.png" alt="givenchy Icon">
                                </div>
                            <?php endif; ?>

                            <!--gmc-->
                            <?php if ($entrada_actual['titulo'] == "GMC") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/gmc.png" alt="gmc Icon">
                                </div>
                            <?php endif; ?>

                            <!--gnp-->
                            <?php if ($entrada_actual['titulo'] == "GNP" || $entrada_actual['titulo'] == "GNP SEGUROS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/gnp.png" alt="gnp Icon">
                                </div>
                            <?php endif; ?>

                            <!--goodyear-->
                            <?php if ($entrada_actual['titulo'] == "GOODYEAR") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/goodyear.png" alt="goodyear Icon">
                                </div>
                            <?php endif; ?>

                            <!--google-->
                            <?php if ($entrada_actual['titulo'] == "GOOGLE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/google.png" alt="google Icon">
                                </div>
                            <?php endif; ?>

                            <!--gucci-->
                            <?php if ($entrada_actual['titulo'] == "GUCCI") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/gucci.png" alt="gucci Icon">
                                </div>
                            <?php endif; ?>

                            <!--gulf-->
                            <?php if ($entrada_actual['titulo'] == "GULF") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/gulf.png" alt="gulf Icon">
                                </div>
                            <?php endif; ?>

                            <!--hasbro-->
                            <?php if ($entrada_actual['titulo'] == "HASBRO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/hasbro.png" alt="hasbro Icon">
                                </div>
                            <?php endif; ?>

                            <!--hdi-->
                            <?php if ($entrada_actual['titulo'] == "HDI") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/hdi.png" alt="hdi Icon">
                                </div>
                            <?php endif; ?>

                            <!--hdi-->
                            <?php if ($entrada_actual['titulo'] == "HDI" || $entrada_actual['titulo'] == "HDI SEGUROS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/hdi.png" alt="hdi Icon">
                                </div>
                            <?php endif; ?>

                            <!--hellmanns-->
                            <?php if ($entrada_actual['titulo'] == "HELLMANN'S" || $entrada_actual['titulo'] == "HELLMANNS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/hellmanns.png" alt="hellmanns Icon">
                                </div>
                            <?php endif; ?>

                            <!--hidrosina-->
                            <?php if ($entrada_actual['titulo'] == "HIDROSINA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/hidrosina.png" alt="hidrosina Icon">
                                </div>
                            <?php endif; ?>

                            <!--holanda-->
                            <?php if ($entrada_actual['titulo'] == "HOLANDA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/holanda.png" alt="holanda Icon">
                                </div>
                            <?php endif; ?>

                            <!--hollister-->
                            <?php if ($entrada_actual['titulo'] == "HOLLISTER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/hollister.png" alt="hollister Icon">
                                </div>
                            <?php endif; ?>

                            <!--honda-->
                            <?php if ($entrada_actual['titulo'] == "HONDA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/honda.png" alt="honda Icon">
                                </div>
                            <?php endif; ?>

                            <!--hooters-->
                            <?php if ($entrada_actual['titulo'] == "HOOTERS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/hooters.png" alt="hooters Icon">
                                </div>
                            <?php endif; ?>

                            <!--hospital-angeles-->
                            <?php if ($entrada_actual['titulo'] == "HOSPITAL-ANGELES") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/hospital-angeles.png" alt="hospital-angeles Icon">
                                </div>
                            <?php endif; ?>

                            <!--hospital-angeles-->
                            <?php if ($entrada_actual['titulo'] == "HOSPITAL ANGELES") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/hospital-angeles.png" alt="hospital-angeles Icon">
                                </div>
                            <?php endif; ?>

                            <!--hotwheels-->
                            <?php if ($entrada_actual['titulo'] == "HOTWHEELS" || $entrada_actual['titulo'] == "HOT WHEELS" || $entrada_actual['titulo'] == "HOT-WHEELS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/hot-wheels.png" alt="hot-wheels Icon">
                                </div>
                            <?php endif; ?>

                            <!--hp-->
                            <?php if ($entrada_actual['titulo'] == "hp") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/hp.png" alt="hp Icon">
                                </div>
                            <?php endif; ?>

                            <!--hsbc-->
                            <?php if ($entrada_actual['titulo'] == "HSBC") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/hsbc.png" alt="hsbc Icon">
                                </div>
                            <?php endif; ?>

                            <!--huawei-->
                            <?php if ($entrada_actual['titulo'] == "HUAWEI") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/huawei.png" alt="huawei Icon">
                                </div>
                            <?php endif; ?>

                            <!--hyundai-->
                            <?php if ($entrada_actual['titulo'] == "HYUNDAI") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/hyundai.png" alt="hyundai Icon">
                                </div>
                            <?php endif; ?>

                            <!--iberoamericana-->
                            <?php if ($entrada_actual['titulo'] == "UNIVERSIDAD IBEROAMERICANA" || $entrada_actual['titulo'] == "IBEROAMERICANA" || $entrada_actual['titulo'] == "IBERO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/iberoamericana.png" alt="iberoamericana Icon">
                                </div>
                            <?php endif; ?>

                            <!--imss-->
                            <?php if ($entrada_actual['titulo'] == "IMSS" || $entrada_actual['titulo'] == "INSTITUTO MEXICANO DEL SEGURO SOCIAL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/imss.png" alt="imss Icon">
                                </div>
                            <?php endif; ?>

                            <!--in-n-out-->
                            <?php if ($entrada_actual['titulo'] == "IN-N-OUT" || $entrada_actual['titulo'] == "IN N OUT") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/in-n-out.png" alt="in-n-out Icon">
                                </div>
                            <?php endif; ?>

                            <!--inbursa-->
                            <?php if ($entrada_actual['titulo'] == "inbursa" || $entrada_actual['titulo'] == "INBURSA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/inbursa.png" alt="inbursa Icon">
                                </div>
                            <?php endif; ?>

                            <!--indisa-->
                            <?php if ($entrada_actual['titulo'] == "INDISA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/indisa.png" alt="indisa Icon">
                                </div>
                            <?php endif; ?>

                            <!--instagram-->
                            <?php if ($entrada_actual['titulo'] == "INSTAGRAM") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/instagram.png" alt="instagram Icon">
                                </div>
                            <?php endif; ?>

                            <!--integra-medica-->
                            <?php if ($entrada_actual['titulo'] == "INTEGRAMÉDICA" || $entrada_actual['titulo'] == "INTEGRAMEDICA" || $entrada_actual['titulo'] == "INTEGRA MEDICA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/integra-medica.png" alt="integra-medica Icon">
                                </div>
                            <?php endif; ?>

                            <!--intel-->
                            <?php if ($entrada_actual['titulo'] == "INTEL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/intel.png" alt="intel Icon">
                                </div>
                            <?php endif; ?>

                            <!--interjet-->
                            <?php if ($entrada_actual['titulo'] == "INTERJET") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/interjet.png" alt="interjet Icon">
                                </div>
                            <?php endif; ?>

                            <!--ipn-->
                            <?php if ($entrada_actual['titulo'] == "IPN" || $entrada_actual['titulo'] == "INSTITUTO POLITECNICO NACIONAL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/ipn.png" alt="ipn Icon">
                                </div>
                            <?php endif; ?>

                            <!--issste-->
                            <?php if ($entrada_actual['titulo'] == "ISSSTE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/issste.png" alt="issste Icon">
                                </div>
                            <?php endif; ?>

                            <!--iusa-->
                            <?php if ($entrada_actual['titulo'] == "IUSA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/iusa.png" alt="iusa Icon">
                                </div>
                            <?php endif; ?>

                            <!--izzi-->
                            <?php if ($entrada_actual['titulo'] == "IZZI") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/izzi.png" alt="izzi Icon">
                                </div>
                            <?php endif; ?>

                            <!--jaguar-->
                            <?php if ($entrada_actual['titulo'] == "JAGUAR") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/jaguar.png" alt="jaguar Icon">
                                </div>
                            <?php endif; ?>

                            <!--jbl-->
                            <?php if ($entrada_actual['titulo'] == "JBL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/jbl.png" alt="jbl Icon">
                                </div>
                            <?php endif; ?>

                            <!--jeep-->
                            <?php if ($entrada_actual['titulo'] == "JEEP") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/jeep.png" alt="jeep Icon">
                                </div>
                            <?php endif; ?>

                            <!--jumex-->
                            <?php if ($entrada_actual['titulo'] == "JUMEX") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/jumex.png" alt="jumex Icon">
                                </div>
                            <?php endif; ?>

                            <!--kelloggs-->
                            <?php if ($entrada_actual['titulo'] == "KELLOGG'S" || $entrada_actual['titulo'] == "KELLOGGS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/kelloggs.png" alt="kelloggs Icon">
                                </div>
                            <?php endif; ?>

                            <!--kfc-->
                            <?php if ($entrada_actual['titulo'] == "KFC" || $entrada_actual['titulo'] == "KENTUCKY FRIED CHICKEN") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/kfc.png" alt="kfc Icon">
                                </div>
                            <?php endif; ?>

                            <!--kfc-->
                            <?php if ($entrada_actual['titulo'] == "KFC" || $entrada_actual['titulo'] == "KENTUCKY FRIED CHICKEN") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/kfc.png" alt="kfc Icon">
                                </div>
                            <?php endif; ?>

                            <!--kia-->
                            <?php if ($entrada_actual['titulo'] == "KIA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/kia.png" alt="kia Icon">
                                </div>
                            <?php endif; ?>

                            <!--kingston-->
                            <?php if ($entrada_actual['titulo'] == "KINGSTON") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/kingston.png" alt="kingston Icon">
                                </div>
                            <?php endif; ?>

                            <!--la-casa-de-tono-->
                            <?php if ($entrada_actual['titulo'] == "LA CASA DE TOÑO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/la-casa-de-tono.png" alt="la-casa-de-tono Icon">
                                </div>
                            <?php endif; ?>

                            <!--la-costena-->
                            <?php if ($entrada_actual['titulo'] == "LA COSTEÑA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/la-costena.png" alt="la-costena Icon">
                                </div>
                            <?php endif; ?>

                            <!--la-latino-seguros-->
                            <?php if ($entrada_actual['titulo'] == "LA LATINO SEGUROS" || $entrada_actual['titulo'] == "LA LATINO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/la-latino-seguros.png" alt="la-latino-seguros Icon">
                                </div>
                            <?php endif; ?>

                            <!--lacoste-->
                            <?php if ($entrada_actual['titulo'] == "LACOSTE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/lacoste.png" alt="lacoste Icon">
                                </div>
                            <?php endif; ?>

                            <!--lala-->
                            <?php if ($entrada_actual['titulo'] == "LALA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/lala.png" alt="lala Icon">
                                </div>
                            <?php endif; ?>

                            <!--lamborghini-->
                            <?php if ($entrada_actual['titulo'] == "LAMBORGHINI") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/lamborghini.png" alt="lamborghini Icon">
                                </div>
                            <?php endif; ?>

                            <!--land-rover-->
                            <?php if ($entrada_actual['titulo'] == "LAND ROVER" || $entrada_actual['titulo'] == "LAND-ROVER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/land-rover.png" alt="land-rover Icon">
                                </div>
                            <?php endif; ?>

                            <!--lego-->
                            <?php if ($entrada_actual['titulo'] == "LEGO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/lego.png" alt="lego Icon">
                                </div>
                            <?php endif; ?>

                            <!--lenovo-->
                            <?php if ($entrada_actual['titulo'] == "LENOVO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/lenovo.png" alt="lenovo Icon">
                                </div>
                            <?php endif; ?>

                            <!--levis-->
                            <?php if ($entrada_actual['titulo'] == "LEVI'S" || $entrada_actual['titulo'] == "LEVIS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/levis.png" alt="levis Icon">
                                </div>
                            <?php endif; ?>

                            <!--lexmark-->
                            <?php if ($entrada_actual['titulo'] == "LEXMARK" || $entrada_actual['titulo'] == "LEXMARK") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/lexmark.png" alt="lexmark Icon">
                                </div>
                            <?php endif; ?>

                            <!--lg-->
                            <?php if ($entrada_actual['titulo'] == "LG" || $entrada_actual['titulo'] == "LIFE'S GOOD") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/lg.png" alt="lg Icon">
                                </div>
                            <?php endif; ?>

                            <!--linio-->
                            <?php if ($entrada_actual['titulo'] == "LINIO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/linio.png" alt="linio Icon">
                                </div>
                            <?php endif; ?>

                            <!--linked-->
                            <?php if ($entrada_actual['titulo'] == "LINKEDIN" || $entrada_actual['titulo'] == "LINKED IN" || $entrada_actual['titulo'] == "LINKED-IN") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/linked.png" alt="linked Icon">
                                </div>
                            <?php endif; ?>

                            <!--linux-->
                            <?php if ($entrada_actual['titulo'] == "LINUX") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/linux.png" alt="linux Icon">
                                </div>
                            <?php endif; ?>

                            <!--little-caesars-->
                            <?php if ($entrada_actual['titulo'] == "LITTLE CAESARS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/little-caesars.png" alt="little-caesars Icon">
                                </div>
                            <?php endif; ?>

                            <!--liverpool-->
                            <?php if ($entrada_actual['titulo'] == "LIVERPOOL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/liverpool.png" alt="liverpool Icon">
                                </div>
                            <?php endif; ?>

                            <!--logitech-->
                            <?php if ($entrada_actual['titulo'] == "LOGITECH") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/logitech.png" alt="logitech Icon">
                                </div>
                            <?php endif; ?>

                            <!--louis-vuitton-->
                            <?php if ($entrada_actual['titulo'] == "LOUIS VUITTON") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/louis-vuitton.png" alt="louis-vuitton Icon">
                                </div>
                            <?php endif; ?>

                            <!--macys-->
                            <?php if ($entrada_actual['titulo'] == "MACYS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/macys.png" alt="macys Icon">
                                </div>
                            <?php endif; ?>

                            <!--makita-->
                            <?php if ($entrada_actual['titulo'] == "MAKITA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/makita.png" alt="makita Icon">
                                </div>
                            <?php endif; ?>

                            <!--mapfre-->
                            <?php if ($entrada_actual['titulo'] == "MAPFRE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/mapfre.png" alt="mapfre Icon">
                                </div>
                            <?php endif; ?>

                            <!--marinela-->
                            <?php if ($entrada_actual['titulo'] == "MARINELA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/marinela.png" alt="marinela Icon">
                                </div>
                            <?php endif; ?>

                            <!--maruchan-->
                            <?php if ($entrada_actual['titulo'] == "MARUCHAN") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/maruchan.png" alt="maruchan Icon">
                                </div>
                            <?php endif; ?>

                            <!--mattel-->
                            <?php if ($entrada_actual['titulo'] == "MATTEL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/mattel.png" alt="mattel Icon">
                                </div>
                            <?php endif; ?>

                            <!--mazda-->
                            <?php if ($entrada_actual['titulo'] == "MAZDA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/mazda.png" alt="mazda Icon">
                                </div>
                            <?php endif; ?>

                            <!--mcdonalds-->
                            <?php if ($entrada_actual['titulo'] == "MCDONALD'S" || $entrada_actual['titulo'] == "MCDONALDS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/mcdonalds.png" alt="mcdonalds Icon">
                                </div>
                            <?php endif; ?>

                            <!--medica-movil-->
                            <?php if ($entrada_actual['titulo'] == "MEDICA MOVIL" || $entrada_actual['titulo'] == "MÉDICA MÓVIL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/medica-movil.png" alt="medica-movil Icon">
                                </div>
                            <?php endif; ?>

                            <!--medica-sur-->
                            <?php if ($entrada_actual['titulo'] == "MEDICA SUR" || $entrada_actual['titulo'] == "MÉDICA SUR") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/medica-sur.png" alt="medica-sur Icon">
                                </div>
                            <?php endif; ?>

                            <!--medica-vial-->
                            <?php if ($entrada_actual['titulo'] == "MEDICA VIAL" || $entrada_actual['titulo'] == "MÉDICA VIAL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/medica-vial.png" alt="medica-vial Icon">
                                </div>
                            <?php endif; ?>

                            <!--mercado-libre-->
                            <?php if ($entrada_actual['titulo'] == "MERCADO LIBRE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/mercado-libre.png" alt="mercado-libre Icon">
                                </div>
                            <?php endif; ?>

                            <!--mercedes-benz-->
                            <?php if ($entrada_actual['titulo'] == "MERCEDES-BENZ" || $entrada_actual['titulo'] == "MERCEDES BENZ") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/mercedes-benz.png" alt="mercedes-benz Icon">
                                </div>
                            <?php endif; ?>

                            <!--messenger-->
                            <?php if ($entrada_actual['titulo'] == "MESSENGER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/messenger.png" alt="messenger Icon">
                                </div>
                            <?php endif; ?>

                            <!--metlife-->
                            <?php if ($entrada_actual['titulo'] == "METLIFE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/metlife.png" alt="metlife Icon">
                                </div>
                            <?php endif; ?>

                            <!--metro-->
                            <?php if ($entrada_actual['titulo'] == "METRO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/metro.png" alt="metro Icon">
                                </div>
                            <?php endif; ?>

                            <!--michelin-->
                            <?php if ($entrada_actual['titulo'] == "MICHELIN") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/michelin.png" alt="michelin Icon">
                                </div>
                            <?php endif; ?>

                            <!--microsoft-->
                            <?php if ($entrada_actual['titulo'] == "MICROSOFT" || $entrada_actual['titulo'] == "WINDOWS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/microsoft.png" alt="microsoft Icon">
                                </div>
                            <?php endif; ?>

                            <!--mini-->
                            <?php if ($entrada_actual['titulo'] == "MINI" || $entrada_actual['titulo'] == "MINI COOPER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/mini.png" alt="mini Icon">
                                </div>
                            <?php endif; ?>

                            <!--mitsubishi-->
                            <?php if ($entrada_actual['titulo'] == "MITSUBISHI" || $entrada_actual['titulo'] == "MITSUBISHI MOTORS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/mitsubishi.png" alt="mitsubishi Icon">
                                </div>
                            <?php endif; ?>

                            <!--mobil-->
                            <?php if ($entrada_actual['titulo'] == "MOBIL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/mobil.png" alt="mobil Icon">
                                </div>
                            <?php endif; ?>

                            <!--modelo-->
                            <?php if ($entrada_actual['titulo'] == "MODELO" || $entrada_actual['titulo'] == "GRUPO MODELO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/modelo.png" alt="modelo Icon">
                                </div>
                            <?php endif; ?>

                            <!--motorola-->
                            <?php if ($entrada_actual['titulo'] == "MOTOROLA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/motorola.png" alt="motorola Icon">
                                </div>
                            <?php endif; ?>

                            <!--movistar-->
                            <?php if ($entrada_actual['titulo'] == "MOVISTAR") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/movistar.png" alt="movistar Icon">
                                </div>
                            <?php endif; ?>

                            <!--msd-->
                            <?php if ($entrada_actual['titulo'] == "MSD") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/msd.png" alt="msd Icon">
                                </div>
                            <?php endif; ?>

                            <!--msi-->
                            <?php if ($entrada_actual['titulo'] == "MSI") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/msi.png" alt="msi Icon">
                                </div>
                            <?php endif; ?>

                            <!--nacional-monte-de-piedad-->
                            <?php if ($entrada_actual['titulo'] == "NACIONAL MONTE DE PIEDAD") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/nacional-monte-de-piedad.png" alt="nacional-monte-de-piedad Icon">
                                </div>
                            <?php endif; ?>

                            <!--nautica-->
                            <?php if ($entrada_actual['titulo'] == "NAUTICA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/nautica.png" alt="nautica Icon">
                                </div>
                            <?php endif; ?>

                            <!--nerf-->
                            <?php if ($entrada_actual['titulo'] == "NERF") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/nerf.png" alt="nerf Icon">
                                </div>
                            <?php endif; ?>

                            <!--nescafe-->
                            <?php if ($entrada_actual['titulo'] == "NESCAFE" || $entrada_actual['titulo'] == "NESCAFÉ") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/nescafe.png" alt="nescafe Icon">
                                </div>
                            <?php endif; ?>

                            <!--nestle-->
                            <?php if ($entrada_actual['titulo'] == "NESTLE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/nestle.png" alt="nestle Icon">
                                </div>
                            <?php endif; ?>

                            <!--netflix-->
                            <?php if ($entrada_actual['titulo'] == "NETFLIX") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/netflix.png" alt="netflix Icon">
                                </div>
                            <?php endif; ?>

                            <!--nike-->
                            <?php if ($entrada_actual['titulo'] == "NIKE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/nike.png" alt="nike Icon">
                                </div>
                            <?php endif; ?>

                            <!--nissan-->
                            <?php if ($entrada_actual['titulo'] == "NISSAN") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/nissan.png" alt="nissan Icon">
                                </div>
                            <?php endif; ?>

                            <!--nokia-->
                            <?php if ($entrada_actual['titulo'] == "NOKIA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/nokia.png" alt="nokia Icon">
                                </div>
                            <?php endif; ?>

                            <!--nvidia-->
                            <?php if ($entrada_actual['titulo'] == "NVIDIA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/nvidia.png" alt="nvidia Icon">
                                </div>
                            <?php endif; ?>

                            <!--oki-->
                            <?php if ($entrada_actual['titulo'] == "OKI") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/oki.png" alt="oki Icon">
                                </div>
                            <?php endif; ?>

                            <!--oppo-->
                            <?php if ($entrada_actual['titulo'] == "OLD NAVY") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/old-navy.png" alt="old-navy Icon">
                                </div>
                            <?php endif; ?>

                            <!--oppo-->
                            <?php if ($entrada_actual['titulo'] == "OPPO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/oppo.png" alt="oppo Icon">
                                </div>
                            <?php endif; ?>

                            <!--oreo-->
                            <?php if ($entrada_actual['titulo'] == "OREO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/oreo.png" alt="oreo Icon">
                                </div>
                            <?php endif; ?>

                            <!--oxxo-->
                            <?php if ($entrada_actual['titulo'] == "OXXO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/oxxo.png" alt="oxxo Icon">
                                </div>
                            <?php endif; ?>

                            <!--palacio-de-hierro-->
                            <?php if ($entrada_actual['titulo'] == "PALACIO DE HIERRO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/palacio-de-hierro.png" alt="palacio-de-hierro Icon">
                                </div>
                            <?php endif; ?>

                            <!--pan-->
                            <?php if ($entrada_actual['titulo'] == "PAN") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/pan.png" alt="pan Icon">
                                </div>
                            <?php endif; ?>

                            <!--panda-express-->
                            <?php if ($entrada_actual['titulo'] == "PANDA EXPRESS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/panda-express.png" alt="panda-express Icon">
                                </div>
                            <?php endif; ?>

                            <!--paris-->
                            <?php if ($entrada_actual['titulo'] == "PARIS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/paris.png" alt="paris Icon">
                                </div>
                            <?php endif; ?>

                            <!--pemex-->
                            <?php if ($entrada_actual['titulo'] == "PEMEX") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/pemex.png" alt="pemex Icon">
                                </div>
                            <?php endif; ?>

                            <!--pemex-->
                            <?php if ($entrada_actual['titulo'] == "PEMEX") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/pemex.png" alt="pemex Icon">
                                </div>
                            <?php endif; ?>

                            <!--pepsico-->
                            <?php if ($entrada_actual['titulo'] == "PEPSICO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/pepsico.png" alt="pepsico Icon">
                                </div>
                            <?php endif; ?>

                            <!--pfizer-->
                            <?php if ($entrada_actual['titulo'] == "PFIZER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/pfizer.png" alt="pfizer Icon">
                                </div>
                            <?php endif; ?>

                            <!--philips-->
                            <?php if ($entrada_actual['titulo'] == "PHILIPS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/philips.png" alt="philips Icon">
                                </div>
                            <?php endif; ?>

                            <!--pinterest-->
                            <?php if ($entrada_actual['titulo'] == "PINTEREST") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/pinterest.png" alt="pinterest Icon">
                                </div>
                            <?php endif; ?>

                            <!--pioneer-->
                            <?php if ($entrada_actual['titulo'] == "PIONEER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/pioneer.png" alt="pioneer Icon">
                                </div>
                            <?php endif; ?>

                            <!--pirelli-->
                            <?php if ($entrada_actual['titulo'] == "pirelli") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/pirelli.png" alt="pirelli Icon">
                                </div>
                            <?php endif; ?>

                            <!--pizza-hut-->
                            <?php if ($entrada_actual['titulo'] == "PIZZA HUT" || $entrada_actual['titulo'] == "PIZZA-HUT") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/pizza-hut.png" alt="pizza-hut Icon">
                                </div>
                            <?php endif; ?>

                            <!--playboy-->
                            <?php if ($entrada_actual['titulo'] == "PLAYBOY") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/playboy.png" alt="playboy Icon">
                                </div>
                            <?php endif; ?>

                            <!--playmobil-->
                            <?php if ($entrada_actual['titulo'] == "PLAYMOBIL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/playmobil.png" alt="playmobil Icon">
                                </div>
                            <?php endif; ?>

                            <!--polo-->
                            <?php if ($entrada_actual['titulo'] == "POLO" || $entrada_actual['titulo'] == "POLO RALPH LAUREN") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/polo.png" alt="polo Icon">
                                </div>
                            <?php endif; ?>

                            <!--pontificia-universidad-catolica-de-chile-->
                            <?php if ($entrada_actual['titulo'] == "PONTIFICIA UNIVERSIDAD CATOLICA DE CHILE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/pontificia-universidad-catolica-de-chile.png" alt="pontificia-universidad-catolica-de-chile Icon">
                                </div>
                            <?php endif; ?>

                            <!--porshe-->
                            <?php if ($entrada_actual['titulo'] == "PORSHE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/porshe.png" alt="porshe Icon">
                                </div>
                            <?php endif; ?>

                            <!--prada-->
                            <?php if ($entrada_actual['titulo'] == "PRADA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/prada.png" alt="prada Icon">
                                </div>
                            <?php endif; ?>

                            <!--prd-->
                            <?php if ($entrada_actual['titulo'] == "PRD") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/prd.png" alt="prd Icon">
                                </div>
                            <?php endif; ?>

                            <!--pri-->
                            <?php if ($entrada_actual['titulo'] == "PRI") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/pri.png" alt="pri Icon">
                                </div>
                            <?php endif; ?>

                            <!--profeco-->
                            <?php if ($entrada_actual['titulo'] == "PROFECO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/profeco.png" alt="profeco Icon">
                                </div>
                            <?php endif; ?>

                            <!--pullandbear-->
                            <?php if ($entrada_actual['titulo'] == "PULL&BEAR" || $entrada_actual['titulo'] == "PULLANDBEAR" || $entrada_actual['titulo'] == "PULL AND BEAR") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/pullandbear.png" alt="pullandbear Icon">
                                </div>
                            <?php endif; ?>

                            <!--puma-->
                            <?php if ($entrada_actual['titulo'] == "PUMA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/puma.png" alt="puma Icon">
                                </div>
                            <?php endif; ?>

                            <!--qualitas-->
                            <?php if ($entrada_actual['titulo'] == "QUALITAS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/qualitas.png" alt="qualitas Icon">
                                </div>
                            <?php endif; ?>

                            <!--redpack-->
                            <?php if ($entrada_actual['titulo'] == "REDPACK") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/redpack.png" alt="redpack Icon">
                                </div>
                            <?php endif; ?>

                            <!--renault-->
                            <?php if ($entrada_actual['titulo'] == "RENAULT") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/renault.png" alt="renault Icon">
                                </div>
                            <?php endif; ?>

                            <!--roche-->
                            <?php if ($entrada_actual['titulo'] == "ROCHE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/roche.png" alt="roche Icon">
                                </div>
                            <?php endif; ?>

                            <!--rolex-->
                            <?php if ($entrada_actual['titulo'] == "ROLEX") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/rolex.png" alt="rolex Icon">
                                </div>
                            <?php endif; ?>

                            <!--rotoplas-->
                            <?php if ($entrada_actual['titulo'] == "ROTOPLAS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/rotoplas.png" alt="rotoplas Icon">
                                </div>
                            <?php endif; ?>

                            <!--sabritas-->
                            <?php if ($entrada_actual['titulo'] == "SABRITAS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/sabritas.png" alt="sabritas Icon">
                                </div>
                            <?php endif; ?>

                            <!--sams-->
                            <?php if ($entrada_actual['titulo'] == "SAMS" || $entrada_actual['titulo'] == "SAMS CLUB" || $entrada_actual['titulo'] == "SAM´S CLUB" || $entrada_actual['titulo'] == "SAM'S") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/sams.png" alt="sams Icon">
                                </div>
                            <?php endif; ?>

                            <!--samsung-->
                            <?php if ($entrada_actual['titulo'] == "SAMSUNG") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/samsung.png" alt="samsung Icon">
                                </div>
                            <?php endif; ?>

                            <!--sanborns-->
                            <?php if ($entrada_actual['titulo'] == "SANBORNS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/sanborns.png" alt="sanborns Icon">
                                </div>
                            <?php endif; ?>

                            <!--sandisk-->
                            <?php if ($entrada_actual['titulo'] == "SANDISK") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/sandisk.png" alt="sandisk Icon">
                                </div>
                            <?php endif; ?>

                            <!--santander-->
                            <?php if ($entrada_actual['titulo'] == "SANTANDER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/santander.png" alt="santander Icon">
                                </div>
                            <?php endif; ?>

                            <!--sat-->
                            <?php if ($entrada_actual['titulo'] == "SAT") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/sat.png" alt="sat Icon">
                                </div>
                            <?php endif; ?>

                            <!--scotiabank-->
                            <?php if ($entrada_actual['titulo'] == "SCOTIABANK") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/scotiabank.png" alt="scotiabank Icon">
                                </div>
                            <?php endif; ?>

                            <!--sears-->
                            <?php if ($entrada_actual['titulo'] == "SEARS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/sears.png" alt="sears Icon">
                                </div>
                            <?php endif; ?>

                            <!--seguros-altas-->
                            <?php if ($entrada_actual['titulo'] == "SEGUROS ALTAS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/seguros-altas.png" alt="seguros-altas Icon">
                                </div>
                            <?php endif; ?>

                            <!--sep-->
                            <?php if ($entrada_actual['titulo'] == "SEP" || $entrada_actual['titulo'] == "SECRETARIA DE EDUCACION PUBLICA" || $entrada_actual['titulo'] == "SECRETARÍA DE EDUCACIÓN PÚBLICA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/sep.png" alt="sep Icon">
                                </div>
                            <?php endif; ?>

                            <!--shake-shake-->
                            <?php if ($entrada_actual['titulo'] == "SHAKE SHACK") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/shake-shak.png" alt="shake-shake Icon">
                                </div>
                            <?php endif; ?>

                            <!--sharp-->
                            <?php if ($entrada_actual['titulo'] == "SHARP") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/sharp.png" alt="sharp Icon">
                                </div>
                            <?php endif; ?>

                            <!--shell-->
                            <?php if ($entrada_actual['titulo'] == "SHELL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/shell.png" alt="shell Icon">
                                </div>
                            <?php endif; ?>

                            <!--shopify-->
                            <?php if ($entrada_actual['titulo'] == "SHOPIFY") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/shopify.png" alt="shopify Icon">
                                </div>
                            <?php endif; ?>

                            <!--similares-->
                            <?php if ($entrada_actual['titulo'] == "SIMILARES" || $entrada_actual['titulo'] == "FARMACIA SIMILARES") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/similares.png" alt="similares Icon">
                                </div>
                            <?php endif; ?>

                            <!--smart-->
                            <?php if ($entrada_actual['titulo'] == "SMART") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/smart.png" alt="smart Icon">
                                </div>
                            <?php endif; ?>

                            <!--snapchat-->
                            <?php if ($entrada_actual['titulo'] == "SAPCHAT") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/snapchat.png" alt="snapchat Icon">
                                </div>
                            <?php endif; ?>

                            <!--snapchat-->
                            <?php if ($entrada_actual['titulo'] == "SNAPCHAT") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/snapchat.png" alt="snapchat Icon">
                                </div>
                            <?php endif; ?>

                            <!--sony-->
                            <?php if ($entrada_actual['titulo'] == "SONY") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/sony.png" alt="sony Icon">
                                </div>
                            <?php endif; ?>

                            <!--soriana-->
                            <?php if ($entrada_actual['titulo'] == "SORIANA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/soriana.png" alt="soriana Icon">
                                </div>
                            <?php endif; ?>

                            <!--spotify-->
                            <?php if ($entrada_actual['titulo'] == "SPOTIFY") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/spotify.png" alt="spotify Icon">
                                </div>
                            <?php endif; ?>

                            <!--stanley-->
                            <?php if ($entrada_actual['titulo'] == "STANLEY") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/stanley.png" alt="stanley Icon">
                                </div>
                            <?php endif; ?>

                            <!--starbucks-->
                            <?php if ($entrada_actual['titulo'] == "STARBUCKS" || $entrada_actual['titulo'] == "STARBUCKS COFFEE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/starbucks.png" alt="starbucks Icon">
                                </div>
                            <?php endif; ?>

                            <!--steren-->
                            <?php if ($entrada_actual['titulo'] == "STEREN") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/steren.png" alt="steren Icon">
                                </div>
                            <?php endif; ?>

                            <!--subaru-->
                            <?php if ($entrada_actual['titulo'] == "SUBARU") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/subaru.png" alt="subaru Icon">
                                </div>
                            <?php endif; ?>

                            <!--suburbia-->
                            <?php if ($entrada_actual['titulo'] == "SUBURBIA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/suburbia.png" alt="suburbia Icon">
                                </div>
                            <?php endif; ?>

                            <!--subway-->
                            <?php if ($entrada_actual['titulo'] == "SUBWAY") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/subway.png" alt="subway Icon">
                                </div>
                            <?php endif; ?>

                            <!--sura-->
                            <?php if ($entrada_actual['titulo'] == "SURA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/sura.png" alt="sura Icon">
                                </div>
                            <?php endif; ?>

                            <!--suzuki-->
                            <?php if ($entrada_actual['titulo'] == "SUZUKI") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/suzuki.png" alt="suzuki Icon">
                                </div>
                            <?php endif; ?>

                            <!--taco-bell-->
                            <?php if ($entrada_actual['titulo'] == "TACO BELL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/taco-bell.png" alt="taco-bell Icon">
                                </div>
                            <?php endif; ?>

                            <!--target-->
                            <?php if ($entrada_actual['titulo'] == "TARGET") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/target.png" alt="target Icon">
                                </div>
                            <?php endif; ?>

                            <!--tecnologico-de-monterrey-->
                            <?php if ($entrada_actual['titulo'] == "TECNOLOGICO DE MONTERREY" || $entrada_actual['titulo'] == "TECNOÓGICO DE MONTERREY") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/tecnologico-de-monterrey.png" alt="tecnologico-de-monterrey Icon">
                                </div>
                            <?php endif; ?>

                            <!--telcel-->
                            <?php if ($entrada_actual['titulo'] == "TELCEL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/telcel.png" alt="telcel Icon">
                                </div>
                            <?php endif; ?>

                            <!--telegram-->
                            <?php if ($entrada_actual['titulo'] == "TELEGRAM") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/telegram.png" alt="telegram Icon">
                                </div>
                            <?php endif; ?>

                            <!--teleton-->
                            <?php if ($entrada_actual['titulo'] == "TELETON" || $entrada_actual['titulo'] == "TELETÓN") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/teleton.png" alt="teleton Icon">
                                </div>
                            <?php endif; ?>

                            <!--televisa-->
                            <?php if ($entrada_actual['titulo'] == "TELEVISA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/televisa.png" alt="televisa Icon">
                                </div>
                            <?php endif; ?>

                            <!--telcel-->
                            <?php if ($entrada_actual['titulo'] == "TELCEL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/telcel.png" alt="telcel Icon">
                                </div>
                            <?php endif; ?>

                            <!--terpel-->
                            <?php if ($entrada_actual['titulo'] == "TERPEL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/terpel.png" alt="terpel Icon">
                                </div>
                            <?php endif; ?>

                            <!--tesla-->
                            <?php if ($entrada_actual['titulo'] == "TESLA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/tesla.png" alt="tesla Icon">
                                </div>
                            <?php endif; ?>

                            <!--the-north-face-->
                            <?php if ($entrada_actual['titulo'] == "THE NORTH FACE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/the-north-face.png" alt="the-north-face Icon">
                                </div>
                            <?php endif; ?>

                            <!--the-ritz-carlton-->
                            <?php if ($entrada_actual['titulo'] == "THE RITZ CARLTON") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/the-ritz-carlton.png" alt="the-ritz-carlton Icon">
                                </div>
                            <?php endif; ?>

                            <!--tik-tok-->
                            <?php if ($entrada_actual['titulo'] == "TIK TOK") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/tik-tok.png" alt="tik-tok Icon">
                                </div>
                            <?php endif; ?>

                            <!--timberland-->
                            <?php if ($entrada_actual['titulo'] == "TIMBERLAND") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/timberland.png" alt="timberland Icon">
                                </div>
                            <?php endif; ?>

                            <!--toks-->
                            <?php if ($entrada_actual['titulo'] == "TOKS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/toks.png" alt="toks Icon">
                                </div>
                            <?php endif; ?>

                            <!--tommy-hilfigher-->
                            <?php if ($entrada_actual['titulo'] == "TOMMY HILFIGER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/tommy-hilfigher.png" alt="tommy-hilfigher Icon">
                                </div>
                            <?php endif; ?>

                            <!--toshiba-->
                            <?php if ($entrada_actual['titulo'] == "TOSHIBA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/toshiba.png" alt="toshiba Icon">
                                </div>
                            <?php endif; ?>

                            <!--toyota-->
                            <?php if ($entrada_actual['titulo'] == "TOYOTA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/toyota.png" alt="toyota Icon">
                                </div>
                            <?php endif; ?>

                            <!--tp-link-->
                            <?php if ($entrada_actual['titulo'] == "TP-LINK") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/tp-link.png" alt="tp-link Icon">
                                </div>
                            <?php endif; ?>

                            <!--tresguerras-->
                            <?php if ($entrada_actual['titulo'] == "TRESGUERRAS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/tresguerras.png" alt="tresguerras Icon">
                                </div>
                            <?php endif; ?>

                            <!--trivago-->
                            <?php if ($entrada_actual['titulo'] == "TRIVAGO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/trivago.png" alt="trivago Icon">
                                </div>
                            <?php endif; ?>

                            <!--truper-->
                            <?php if ($entrada_actual['titulo'] == "TRUPER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/truper.png" alt="truper Icon">
                                </div>
                            <?php endif; ?>

                            <!--tv-azteca-->
                            <?php if ($entrada_actual['titulo'] == "TV-AZTECA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/tv-azteca.png" alt="tv-azteca Icon">
                                </div>
                            <?php endif; ?>

                            <!--tv-azteca-->
                            <?php if ($entrada_actual['titulo'] == "TV-AZTECA" || $entrada_actual['titulo'] == "AZTECA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/tv-azteca.png" alt="tv-azteca Icon">
                                </div>
                            <?php endif; ?>

                            <!--uaem-->
                            <?php if ($entrada_actual['titulo'] == "UAEM" || $entrada_actual['titulo'] == "UNIVERSIDAD AUTÓNOMA DEL ESTADO DE MÉXICO" || $entrada_actual['titulo'] == "UNIVERSIDAD AUTONOMA DEL ESTADO DE MEXICO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/uaem.png" alt="uaem Icon">
                                </div>
                            <?php endif; ?>

                            <!--uam-->
                            <?php if ($entrada_actual['titulo'] == "UAM" || $entrada_actual['titulo'] == "UNIVERSIDAD AUTÓNOMA METROPOLITANA" || $entrada_actual['titulo'] == "UNIVERSIDAD AUTONOMA METROPOLITANA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/uam.png" alt="uam Icon">
                                </div>
                            <?php endif; ?>

                            <!--uber-->
                            <?php if ($entrada_actual['titulo'] == "UBER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/uber.png" alt="uber Icon">
                                </div>
                            <?php endif; ?>

                            <!--uline-->
                            <?php if ($entrada_actual['titulo'] == "ULINE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/uline.png" alt="uline Icon">
                                </div>
                            <?php endif; ?>

                            <!--unam-->
                            <?php if ($entrada_actual['titulo'] == "UNAM" || $entrada_actual['titulo'] == "UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO" || $entrada_actual['titulo'] == "UNIVERSIDAD NACIONAL AUTONOMA DE MEXICO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/unam.png" alt="unam Icon">
                                </div>
                            <?php endif; ?>

                            <!--underamour-->
                            <?php if ($entrada_actual['titulo'] == "UNDERAMOUR") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/underamour.png" alt="underamour Icon">
                                </div>
                            <?php endif; ?>

                            <!--unilever-->
                            <?php if ($entrada_actual['titulo'] == "UNILEVER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/unilever.png" alt="unilever Icon">
                                </div>
                            <?php endif; ?>

                            <!--union-pacific-->
                            <?php if ($entrada_actual['titulo'] == "UNION PACIFIC") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/union-pacific.png" alt="union-pacific Icon">
                                </div>
                            <?php endif; ?>

                            <!--uniroyal-->
                            <?php if ($entrada_actual['titulo'] == "UNIROYAL") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/uniroyal.png" alt="uniroyal Icon">
                                </div>
                            <?php endif; ?>

                            <!--urrea-->
                            <?php if ($entrada_actual['titulo'] == "URREA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/urrea.png" alt="urrea Icon">
                                </div>
                            <?php endif; ?>

                            <!--uvm-->
                            <?php if ($entrada_actual['titulo'] == "UVM") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/uvm.png" alt="uvm Icon">
                                </div>
                            <?php endif; ?>

                            <!--uvm-->
                            <?php if ($entrada_actual['titulo'] == "UVM" || $entrada_actual['titulo'] == "UNIVERSIDAD DEL VALLE DE MÉXICO" || $entrada_actual['titulo'] == "UNIVERSIDAD DEL VALLE DE MÉXICO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/uvm.png" alt="uvm Icon">
                                </div>
                            <?php endif; ?>

                            <!--vans-->
                            <?php if ($entrada_actual['titulo'] == "VANS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/vans.png" alt="vans Icon">
                                </div>
                            <?php endif; ?>

                            <!--vans-->
                            <?php if ($entrada_actual['titulo'] == "VANS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/vans.png" alt="vans Icon">
                                </div>
                            <?php endif; ?>

                            <!--verizon-->
                            <?php if ($entrada_actual['titulo'] == "VERIZON") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/verizon.png" alt="verizon Icon">
                                </div>
                            <?php endif; ?>

                            <!--vips-->
                            <?php if ($entrada_actual['titulo'] == "VIPS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/vips.png" alt="vips Icon">
                                </div>
                            <?php endif; ?>

                            <!--victorias-secret-->
                            <?php if ($entrada_actual['titulo'] == "VICTORIA'S SECRET" || $entrada_actual['titulo'] == "VICTORIAS SECRET") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/victorias-secret.png" alt="victorias-secret Icon">
                                </div>
                            <?php endif; ?>

                            <!--viva-aerobus-->
                            <?php if ($entrada_actual['titulo'] == "VIVA AEROBUS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/viva-aerobus.png" alt="viva-aerobus Icon">
                                </div>
                            <?php endif; ?>

                            <!--volaris-->
                            <?php if ($entrada_actual['titulo'] == "VOLARIS") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/volaris.png" alt="volaris Icon">
                                </div>
                            <?php endif; ?>

                            <!--volkswagen-->
                            <?php if ($entrada_actual['titulo'] == "VOLKSWAGEN") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/volkswagen.png" alt="volkswagen Icon">
                                </div>
                            <?php endif; ?>

                            <!--volvo-->
                            <?php if ($entrada_actual['titulo'] == "VOLVO") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/volvo.png" alt="volvo Icon">
                                </div>
                            <?php endif; ?>

                            <!--walmart-->
                            <?php if ($entrada_actual['titulo'] == "WALMART") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/walmart.png" alt="walmart Icon">
                                </div>
                            <?php endif; ?>

                            <!--whatsapp-->
                            <?php if ($entrada_actual['titulo'] == "WHATSAPP") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/whatsapp.png" alt="whatsapp Icon">
                                </div>
                            <?php endif; ?>

                            <!--wing-stop-->
                            <?php if ($entrada_actual['titulo'] == "WING STOP") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/wing-stop.png" alt="wing-stop Icon">
                                </div>
                            <?php endif; ?>

                            <!--wonder-->
                            <?php if ($entrada_actual['titulo'] == "WONDER") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/wonder.png" alt="wonder Icon">
                                </div>
                            <?php endif; ?>

                            <!--xerox-->
                            <?php if ($entrada_actual['titulo'] == "XEROX") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/xerox.png" alt="xerox Icon">
                                </div>
                            <?php endif; ?>

                            <!--yakult-->
                            <?php if ($entrada_actual['titulo'] == "YAKULT") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/yakult.png" alt="yakult Icon">
                                </div>
                            <?php endif; ?>

                            <!--yale-->
                            <?php if ($entrada_actual['titulo'] == "YALE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/yale.png" alt="yale Icon">
                                </div>
                            <?php endif; ?>


                            <!--yamaha-->
                            <?php if ($entrada_actual['titulo'] == "YAMAHA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/yamaha.png" alt="yamaha Icon">
                                </div>
                            <?php endif; ?>

                            <!--youtube-->
                            <?php if ($entrada_actual['titulo'] == "YOUTUBE") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/youtube.png" alt="youtube Icon">
                                </div>
                            <?php endif; ?>

                            <!--zara-->
                            <?php if ($entrada_actual['titulo'] == "ZARA") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/zara.png" alt="zara Icon">
                                </div>
                            <?php endif; ?>

                            <!--zurich-->
                            <?php if ($entrada_actual['titulo'] == "ZURICH") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/zurich.png" alt="zurich Icon">
                                </div>
                            <?php endif; ?>

                            <!--zwan-->
                            <?php if ($entrada_actual['titulo'] == "ZWAN") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/zwan.png" alt="zwan Icon">
                                </div>
                            <?php endif; ?>

                            <!--tornero-->
                            <?php if ($entrada_actual['titulo'] == "Tornero") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/tornero.png" alt="tornero Icon">
                                </div>
                            <?php endif; ?>

                            <!--sastre-->
                            <?php if ($entrada_actual['titulo'] == "Sastre") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/sastre.png" alt="sastre Icon">
                                </div>
                            <?php endif; ?>

                            <!--soldador-->
                            <?php if ($entrada_actual['titulo'] == "Soldador") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/soldador.png" alt="soldador Icon">
                                </div>
                            <?php endif; ?>

                            <!--psicologo-->
                            <?php if ($entrada_actual['titulo'] == "Psicólogo") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/psicologo.png" alt="psicologo Icon">
                                </div>
                            <?php endif; ?>

                            <!--pescador-->
                            <?php if ($entrada_actual['titulo'] == "Pescador") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/pescador.png" alt="pescador Icon">
                                </div>
                            <?php endif; ?>

                            <!--panadero-->
                            <?php if ($entrada_actual['titulo'] == "Panadero") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/panadero.png" alt="panadero Icon">
                                </div>
                            <?php endif; ?>


                            <!--peluquero-->
                            <?php if ($entrada_actual['titulo'] == "Peluquero") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/peluquero.png" alt="peluquero Icon">
                                </div>
                            <?php endif; ?>

                            <!--medico-->
                            <?php if ($entrada_actual['titulo'] == "Médico") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/medico.png" alt="medico Icon">
                                </div>
                            <?php endif; ?>

                            <!--mecanico-->
                            <?php if ($entrada_actual['titulo'] == "Mecánico") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/mecanico.png" alt="mecanico Icon">
                                </div>
                            <?php endif; ?>

                            <!--lavandero-->
                            <?php if ($entrada_actual['titulo'] == "Lavandero") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/lavandero.png" alt="lavandero Icon">
                                </div>
                            <?php endif; ?>

                            <!--fontanero-->
                            <?php if ($entrada_actual['titulo'] == "Fontanero") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/fontanero.png" alt="fontanero Icon">
                                </div>
                            <?php endif; ?>

                            <!--electricista-->
                            <?php if ($entrada_actual['titulo'] == "Electricista") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/electricista.png" alt="electricista Icon">
                                </div>
                            <?php endif; ?>

                            <!--doctor-->
                            <?php if ($entrada_actual['titulo'] == "Doctor") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/doctor.png" alt="doctor Icon">
                                </div>
                            <?php endif; ?>

                            <!--contador-->
                            <?php if ($entrada_actual['titulo'] == "Contador") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/contador.png" alt="contador Icon">
                                </div>
                            <?php endif; ?>

                            <!--cocinero-->
                            <?php if ($entrada_actual['titulo'] == "Cocinero") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/cocinero.png" alt="cocinero Icon">
                                </div>
                            <?php endif; ?>

                            <!--chofer-->
                            <?php if ($entrada_actual['titulo'] == "Chofer") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/chofer.png" alt="chofer Icon">
                                </div>
                            <?php endif; ?>

                            <!--cerrajero-->
                            <?php if ($entrada_actual['titulo'] == "Cerrajero") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/cerrajero.png" alt="cerrajero Icon">
                                </div>
                            <?php endif; ?>

                            <!--carpintero-->
                            <?php if ($entrada_actual['titulo'] == "Carpintero") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/carpintero.png" alt="carpintero Icon">
                                </div>
                            <?php endif; ?>

                            <!--carnicero-->
                            <?php if ($entrada_actual['titulo'] == "Carnicero") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/carnicero.png" alt="carnicero Icon">
                                </div>
                            <?php endif; ?>

                            <!--barrendero-->
                            <?php if ($entrada_actual['titulo'] == "Barrendero") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/barrendero.png" alt="barrendero Icon">
                                </div>
                            <?php endif; ?>

                            <!--artesano-->
                            <?php if ($entrada_actual['titulo'] == "Artesano") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/artesano.png" alt="artesano Icon">
                                </div>
                            <?php endif; ?>

                            <!--albañil-->
                            <?php if ($entrada_actual['titulo'] == "Albañil") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/albañil.png" alt="albañil Icon">
                                </div>
                            <?php endif; ?>

                            <!--agricultor-->
                            <?php if ($entrada_actual['titulo'] == "Agricultor") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/agricultor.png" alt="agricultor Icon">
                                </div>
                            <?php endif; ?>

                            <!--administrador-->
                            <?php if ($entrada_actual['titulo'] == "Administrador") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/administrador.png" alt="administrador Icon">
                                </div>
                            <?php endif; ?>

                            <!--abogado-->
                            <?php if ($entrada_actual['titulo'] == "Abogado") : ?>
                                <div class="logotipo-empresa">
                                    <img src="./logos/abogado.png" alt="abogado Icon">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="dividir">
                        <div class="titulo-comentario">
                            <?= $entrada_actual['titulo_comentario'] ?>
                        </div>


                        <div class="tipo-comentario">
                            <?= $entrada_actual['categoria'] ?>
                        </div>
                    </div>

                    <div class="contenedor">
                        <div class="descripcion">
                            <?= $entrada_actual['descripcion'] ?>
                        </div>


                        <!--Archivos-->
                        <div class="archivos">
                            <?php if (empty($entrada_actual['imagen']) && empty($entrada_actual['imagen_2']) && empty($entrada_actual['imagen_3']) && empty($entrada_actual['imagen_4'])) : ?>
                                <p class="error">No se ingresaron archivos a este comentario</p>
                            <?php endif; ?>

                            <?php if (!empty($entrada_actual['imagen']) || !empty($entrada_actual['imagen_2']) || !empty($entrada_actual['imagen_3']) || !empty($entrada_actual['imagen_4'])) : ?>
                                <p class="exito">Se ingreso un archivo de evidencia</p>
                                <div class="dividir">
                                    <div class="dos-partes imagen-subida">
                                        <img src="<?= $entrada_actual['imagen'] ?>" alt="">
                                    </div>

                                    <div class="dos-partes imagen-subida">
                                        <img src="<?= $entrada_actual['imagen_2'] ?>" alt="">
                                    </div>
                                </div>

                                <div class="dividir">
                                    <div class="dos-partes imagen-subida">
                                        <img src="<?= $entrada_actual['imagen_3'] ?>" alt="">
                                    </div>

                                    <div class="dos-partes imagen-subida">
                                        <img src="<?= $entrada_actual['imagen_4'] ?>" alt="">
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                </article>
            </div>
        </div>
    </section>

    <div class="separador"></div>

    <section class="contenedor">
        <div class="mensaje-privacidad">
            <h3>Tus comentarios siempre seguros</h3>
            <div class="dividir alinear-vertical">
                <div class="veinte centrar-texto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shield-lock" width="100" height="100" viewBox="0 0 24 24" stroke-width="0.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" />
                        <circle cx="12" cy="11" r="1" />
                        <line x1="12" y1="12" x2="12" y2="14.5" />
                    </svg>
                </div>
                <div class="setenta">
                    <p>La página cuenta con protección SSL para proteger sus datos además que en los comentarios, las respuestas que se pudieran realizar no se porpocionará su perfil ni acceso a el. <a href="./privacidad.php"><strong>Saber Más</strong> </a></p>
                </div>
                <div class="diez centrar-texto">
                    <img src="./img/SSL-certificado.png" alt="">
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php require_once 'footer.php' ?>
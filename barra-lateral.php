<!--BARRA LATERAL-->
<div class="contenedor">
    <!--CATEGORÍAS-->
    <h3 class="fw-400 mayus" id="changa">Categorías</h3>
    <?php
    $categorias = conseguirCategorias($db);
    if (!empty($categorias)) :
        $categoria = mysqli_fetch_assoc($categorias)
    ?>
        <!--ABARROTES Y BEBIDAS-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=38">Abarrotes y Bebidas
                    <span class="tooltip-box">
                        <p>Vinos o Vinaterías <br>
                            Cerveza o Cervecerías <br>
                            Leche y/o Sustitutos <br>
                            Alimentos <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--ASEGURADORAS-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=29">Aseguradoras
                    <span class="tooltip-box">
                        <p>
                            MetLife <br>
                            Mapfre <br>
                            Qualitas<br>
                            GNP<br>
                            Zurich<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--AUTOMOTRIZ-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=20">Automotriz
                    <span class="tooltip-box">
                        <p>
                            Concesionarias <br>
                            Nissan <br>
                            Ford <br>
                            Papeleos o Tramites <br>
                            Hyundai <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--BANCOS-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=14">Bancos
                    <span class="tooltip-box">
                        <p>
                            Banamex <br>
                            Banco Azteca <br>
                            Santander <br>
                            Bancomer <br>
                            American Express <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--BANQUETES-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=53">Banquetes
                    <span class="tooltip-box">
                        <p>
                            Meseros <br>
                            Comida <br>
                            Tiempos de Entrega <br>
                            Costos<br>
                            Calidad <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--BENEFICIENCIAS-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=54">Beneficencias y Fundaciones
                    <span class="tooltip-box">
                        <p>
                            Fundación Teleton <br>
                            Fundación Televisa<br>
                            Fundación Azteca <br>
                            Fundación Walmart<br>
                            Nacional Monte de Piedad <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--COMBUSTIBLES-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=31">Combustibles
                    <span class="tooltip-box">
                        <p>
                            PEMEX <br>
                            Gasolineras en General<br>
                            Shell <br>
                            Hidrosina<br>
                            G-500 <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--COMIDA Y RESTAURANTES-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=33">Comida y Restaurantes
                    <span class="tooltip-box">
                        <p>
                            Vips <br>
                            Samborns<br>
                            Little Caesars <br>
                            KFC<br>
                            Taquerías <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--CONSTRUCCIÓN-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=23">Construcción y/o constructoras
                    <span class="tooltip-box">
                        <p>
                            Grupo Carso <br>
                            Cruz Azul <br>
                            Grupo INDI <br>
                            Casas Ara<br>
                            Grupo ACS <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--CONSUMBIBLES-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=30">Consumibles
                    <span class="tooltip-box">
                        <p>
                            Tintas <br>
                            Toner <br>
                            HP <br>
                            Epson<br>
                            Brother <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--DEPORTES-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=40">Deportes
                    <span class="tooltip-box">
                        <p>
                            Gimnasios <br>
                            Centros de Deporte <br>
                            Adidas <br>
                            Olimpiadas<br>
                            Torneos <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--EDUCACIÓN-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=17">Educación
                    <span class="tooltip-box">
                        <p>
                            Universidades de Paga <br>
                            IPN <br>
                            UNAM <br>
                            TecNM<br>
                            Cursos Generales <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--ELECTRÓNICOS-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=32">Electrónicos
                    <span class="tooltip-box">
                        <p>
                            Steren <br>
                            Apple <br>
                            Sony <br>
                            LG<br>
                            Samsung <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--ENERGÍAS LIMPIAS-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=37">Energías Limpias
                    <span class="tooltip-box">
                        <p>
                            Iberdrola <br>
                            Eólica <br>
                            Solar <br>
                            Calentador Solar<br>
                            Hidroeléctrica <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--EVENTOS-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=55">Eventos
                    <span class="tooltip-box">
                        <p>
                            Salones <br>
                            Jardines <br>
                            Haciendas <br>
                            Cabañas<br>
                            Terrazas <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--FARMACEUTICO-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=34">Farmacéutico
                    <span class="tooltip-box">
                        <p>
                            Medicamento Genérico <br>
                            Medicamento Patente <br>
                            Farmacias del Ahorro<br>
                            Vacunas<br>
                            Similares<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--FERRETERÍA, LLANTAS Y AUTOMOTRIZ-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=48">Ferretería, llantas y automotriz
                    <span class="tooltip-box">
                        <p>
                            Michellin <br>
                            Trupper <br>
                            Autozone<br>
                            Makita<br>
                            DeWalt<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--GOBIERNO-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=18">Gobierno
                    <span class="tooltip-box">
                        <p>
                            SEP <br>
                            Política <br>
                            SAT<br>
                            Dependencias Gubernamentales<br>
                            Programas Sociales<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--HOSPEDAJE-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=28">Hospedaje
                    <span class="tooltip-box">
                        <p>
                            Hostelería <br>
                            Airbnb <br>
                            Renta de cuartos<br>
                            Renta de cabañas<br>
                            Renta de departamentos<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--JOYERÍA Y RELOJES-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=45">Joyería y Relojes
                    <span class="tooltip-box">
                        <p>
                            CASSIO <br>
                            BIZARRO <br>
                            BERGER<br>
                            ROLEX<br>
                            Joyerías Generales<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--JUGUETES-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=43">Juguetes
                    <span class="tooltip-box">
                        <p>
                            HASBRO <br>
                            MATTEL <br>
                            NERF<br>
                            LEGO<br>
                            Juguetes Generales<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--TIENDAS EN LÍNEA-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=49">Tiendas en Línea
                    <span class="tooltip-box">
                        <p>
                            Mercado Libre <br>
                            Amazon <br>
                            Ebay<br>
                            AliExpress<br>
                            UNLINE<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--MEMBRESIAS-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=50">Membresías
                    <span class="tooltip-box">
                        <p>
                            Centros Deportivos <br>
                            Clubes Sociales <br>
                            Tiendas<br>
                            Tiendas de Ropa<br>
                            Parques de Diversiónes<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>


        <!--PAPELERIA-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=47">Papelería
                    <span class="tooltip-box">
                        <p>
                            Plumas <br>
                            Libretas <br>
                            Hojas <br>
                            Accesorio de Oficinas<br>
                            Útiles Escolares<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--PAQUETERÍA Y CORREOS-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=25">Paquetería y Correos
                    <span class="tooltip-box">
                        <p>
                            FEDEX <br>
                            Correo de México <br>
                            Estafeta <br>
                            AMAZON<br>
                            Mercado Envíos<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--PERSONA FÍSICA-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=39">Persona Física
                    <span class="tooltip-box">
                        <p>
                            Profesionistas <br>
                            Clientes <br>
                            Vendedores <br>
                            Cualquier persona<br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--PRODUCTOS-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=27">Productos Generales
                    <span class="tooltip-box">
                        <p>
                            Productos Singulares <br>
                            Productos fuera de las categorías mostradas
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--REDES SOCIALES-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=26">Redes Sociales
                    <span class="tooltip-box">
                        <p>
                            Facebook <br>
                            Twitter <br>
                            Instagram <br>
                            Youtube<br>
                            Pinterest<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--RELIGIÓN-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=52">Religión
                    <span class="tooltip-box">
                        <p>
                            Pagos <br>
                            Contrataciones <br>
                            Reservaciones <br>
                            Donaciones<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--ROPA, CALZADO Y ZAPATOS-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=41">Ropa, Calzado y Zapatos
                    <span class="tooltip-box">
                        <p>
                            ZARA <br>
                            CHANEL <br>
                            GIVENCHY <br>
                            PULL & BEAR<br>
                            NIKE<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--SALUD-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=16">Salud
                    <span class="tooltip-box">
                        <p>
                            Hospitales Privados <br>
                            Clínicas <br>
                            IMSS <br>
                            ISSSTE<br>
                            Centros de Salud<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--SALUD Y BELLEZA-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=44">Salud y Belleza Estética
                    <span class="tooltip-box">
                        <p>
                            Estéticas <br>
                            Barberías <br>
                            Productos de Belleza <br>
                            Suplementos Alimenticios<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--SERVICIOS-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=19">Servicios
                    <span class="tooltip-box">
                        <p>
                            Electricidad <br>
                            Agua <br>
                            Gas <br>
                            Internet<br>
                            Telefonía<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--SERVICIOS DE STREAMING-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=51">Servicios de Streaming
                    <span class="tooltip-box">
                        <p>
                            Netflix <br>
                            HBO <br>
                            Amazon Prime <br>
                            Spotify<br>
                            Apple Music<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--SOFTWARE-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=35">Software
                    <span class="tooltip-box">
                        <p>
                            Android <br>
                            IOS <br>
                            Aplicaciones <br>
                            Puntos de Venta<br>
                            Software en General<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--SUPERMERCADOS-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=58">Supermercados y Autoservicios
                    <span class="tooltip-box">
                        <p>
                            Walmart <br>
                            Cotsco <br>
                            Chedraui <br>
                            OXXO<br>
                            7Eleven<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--TECNOLOGÍA-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=21">Tecnología
                    <span class="tooltip-box">
                        <p>
                            Apple <br>
                            Microsoft <br>
                            Google <br>
                            Samsung<br>
                            Huawei<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--TELECOMUNICACIONES-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=15">Telecomunicaciones
                    <span class="tooltip-box">
                        <p>
                            AMERICA MOVIL <br>
                            TELCEL <br>
                            MOVISTAR <br>
                            TOTALPLAY<br>
                            AT&T<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--TIENDAS DEPARTAMENTALES-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=57">Tiendas Departamentales
                    <span class="tooltip-box">
                        <p>
                            Elektra<br>
                            Liverpool <br>
                            SEARS <br>
                            Palacio de Hierro<br>
                            Sanborns<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--TODO PARA BEBE-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=42">Todo para bebe
                    <span class="tooltip-box">
                        <p>
                            Pañales<br>
                            Alimento <br>
                            Ropa <br>
                            Accesorios<br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--TRANSPORTES-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=24">Transportes
                    <span class="tooltip-box">
                        <p>
                            Uber<br>
                            Aerolíneas <br>
                            Metro <br>
                            Metrobus<br>
                            Didi <br>
                            Cruceros <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--TURISMO-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=36">Turismo
                    <span class="tooltip-box">
                        <p>
                            Estafas<br>
                            Guías Turísticos<br>
                            Aduanas <br>
                            Y mucho más <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>

        <!--VETERINARIA Y ZOOTECNIA-->
        <div class="categorias">
            <li id="tipo-reclamo">
                <a class="tooltip" href="categoria.php?id=56">Veterinaria y Zootecnia
                    <span class="tooltip-box">
                        <p>
                            Veterinarias Generales<br>
                            Veterinarios <br>
                            Alimentos <br>
                            Medicinas <br>
                        </p>
                    </span>
                </a>
            </li>
        </div>
    <?php endif; ?>
</div>
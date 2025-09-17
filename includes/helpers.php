<?php
function mostrarError($errores, $campo){
	$alerta = '';
	if(isset($errores[$campo]) && !empty($campo)){
		$alerta = "<div class='error'>".$errores[$campo].'</div>';
	}
	
	return $alerta;
}

function borrarErrores(){
	$borrado = false;
	
	if(isset($_SESSION['errores'])){
		$_SESSION['errores'] = null;
		$borrado = true;
	}
	
	if(isset($_SESSION['errores_entrada'])){
		$_SESSION['errores_entrada'] = null;
		$borrado = true;
	}
	
	if(isset($_SESSION['completado'])){
		$_SESSION['completado'] = null;
		$borrado = true;
	}

	if(isset($_SESSION['marca_ok'])){
		$_SESSION['marca_ok'] = null;
		$borrado = true;
	}

	if(isset($_SESSION[''])){
		$_SESSION[''] = null;
		$borrado = true;
	}
	
	return $borrado;
}


function conseguirCategorias($conexion){
	$sql = "SELECT * FROM categorias ORDER BY nombre ASC;";
	$categorias = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($categorias && mysqli_num_rows($categorias) >= 1){
		$resultado = $categorias;
	}
	
	return $resultado;
}

function conseguirCategoriasMarcas($conexion){
	$sql = "SELECT * FROM categoria_marca ORDER BY nombre ASC;";
	$categoria_marca = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($categoria_marca && mysqli_num_rows($categoria_marca) >= 1){
		$resultado = $categoria_marca;
	}
	
	return $resultado;
}



function conseguirCalificacion($conexion){
	$sql = "SELECT * FROM calificacion ORDER BY id ASC;";
	$calificacion = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($calificacion && mysqli_num_rows($calificacion) >= 1){
		$resultado = $calificacion;
	}
	
	return $resultado;
}

function conseguirTipoCategoria($conexion){
	$sql = "SELECT * FROM tipo_categoria ORDER BY nombre_categoria ASC;";
	$tipo_categoria = mysqli_query($conexion, $sql);

	$resultado = array();
	if($tipo_categoria && mysqli_num_rows($tipo_categoria) >=1){
		$resultado = $tipo_categoria;
	}

	return  $resultado;
}

function conseguirMarcas($conexion){
	$sql = "SELECT * FROM categorias ORDER BY nombre ASC;";
	$categorias = mysqli_query($conexion, $sql);

	$resultado = array();
	if($categorias && mysqli_num_rows($categorias) >=1){
		$resultado = $categorias;
	}
	return $resultado;
}

function conseguirCategoriaMarca($conexion){
	$sql = "SELECT * FROM categoria_marca ORDER BY nombre ASC;";
	$categoria_marca = mysqli_query($conexion, $sql);

	$resultado = array();
	if($categoria_marca && mysqli_num_rows($categoria_marca) >=1){
		$resultado = $categoria_marca;
	}
	return $resultado;
}

function conseguirRecomendacion($conexion){
	$sql = "SELECT * FROM recomendacion ORDER BY id ASC;";
	$recomendacion = mysqli_query($conexion, $sql);

	$resultado = array();
	if($recomendacion && mysqli_num_rows($recomendacion) >=1){
		$resultado = $recomendacion;
	}
	return $resultado;
}

function conseguirCategoria_Fraude($conexion){
	$sql = "SELECT * FROM categoria_fraude ORDER BY nombre ASC;";
	$categoria_fraude = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($categoria_fraude && mysqli_num_rows($categoria_fraude) >= 1){
		$resultado = $categoria_fraude;
	}
	
	return $resultado;
}

function conseguirCategorias_2($conexion){
	$sql = "SELECT * FROM categoria_2 ORDER BY nombre ASC;";
	$categorias_2 = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($categorias_2 && mysqli_num_rows($categorias_2) >= 1){
		$resultado = $categorias_2;
	}
	
	return $resultado;
}

function conseguirCategorias_3($conexion){
	$sql = "SELECT * FROM categoria_3 ORDER BY nombre ASC;";
	$categorias_3 = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($categorias_3 && mysqli_num_rows($categorias_3) >= 1){
		$resultado = $categorias_3;
	}
	
	return $resultado;
}

function conseguirCategorias_4($conexion){
	$sql = "SELECT * FROM categoria_4 ORDER BY nombre ASC;";
	$categorias_4 = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($categorias_4 && mysqli_num_rows($categorias_4) >= 1){
		$resultado = $categorias_4;
	}
	
	return $resultado;
}

function conseguirCategoria($conexion, $id){
	$sql = "SELECT * FROM categorias WHERE id = $id;";
	$categorias = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($categorias && mysqli_num_rows($categorias) >= 1){
		$resultado = mysqli_fetch_assoc($categorias);
	}
	
	return $resultado;
}
function conseguirCategoriaMarcaID($conexion, $id){
	$sql = "SELECT * FROM categoria_marca WHERE id = $id;";
	$categoria_marca = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($categoria_marca && mysqli_num_rows($categoria_marca) >= 1){
		$resultado = mysqli_fetch_assoc($categoria_marca);
	}
	
	return $resultado;
}





function conseguirCategoria_2($conexion, $id){
	$sql = "SELECT * FROM categoria_2 WHERE id = $id;";
	$categorias_2 = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($categorias_2 && mysqli_num_rows($categorias_2) >= 1){
		$resultado = mysqli_fetch_assoc($categorias_2);
	}
	
	return $resultado;
}

function conseguirEmpresas($conexion){
	$sql = "SELECT * FROM entradas ORDER BY titulo ASC;";
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $resultado;
}

function conseguirEmpresa($conexion, $id){
	$sql = "SELECT * FROM entradas WHERE id = $id;";
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = mysqli_fetch_assoc($entradas);
	}
	
	return $resultado;
}

//Entrada de Entradas
function conseguirEntrada($conexion, $id){
	$sql = "SELECT e.*, c.nombre AS 'categoria', CONCAT(u.nombre, ' ', u.apellidos) AS usuario"
		  . " FROM entradas e ".
		   "INNER JOIN categorias c ON e.categoria_id = c.id ".
		   "INNER JOIN usuarios u ON e.usuario_id = u.id ".
		   
		   "WHERE e.id = $id";
	$entrada = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entrada && mysqli_num_rows($entrada) >= 1){
		$resultado = mysqli_fetch_assoc($entrada);
	}
	
	return $resultado;
}

function conseguirEntrada_marcas($conexion, $id){
	$sql = "SELECT es.*, cm.nombre AS 'categoria_marca', CONCAT(u.nombre, ' ', u.apellidos) AS usuario"
		  . " FROM entradas es ".
		   "INNER JOIN categoria_marca cm ON es.categoria_marca_id = cm.id ".
		   "INNER JOIN usuarios u ON es.usuario_id = u.id ".
		   
		   "WHERE e.id = $id";
	$entrada = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entrada && mysqli_num_rows($entrada) >= 1){
		$resultado = mysqli_fetch_assoc($entrada);
	}
	
	return $resultado;
}

function conseguirCategoriaMarcas($conexion, $id){
	$sql = "SELECT m.*, cm.nombre_marca AS 'categoria_marca', CONCAT (u.nombre, ' ', u.apellidos) AS usuario"
	. "FROM marcas m ". 
	"INNER JOIN categoria_marca cm ON m.categoria_marca_id = c.id ". 
	"INNER JOIN usuarios u ON m.usuario_id = u.id ". 

	"WHERE m.id = $id";
	$entrada = mysqli_query($conexion, $sql);

	$resultado = array();
	if($entrada && mysqli_num_rows($entrada) >= 1){
		$resultado = mysqli_fetch_assoc($entrada);
	}
	return $resultado;
}

function conseguirEntradaMarcas($conexion, $id){
	$sql = "SELECT e.*, m.nombre_marca AS 'categoria_marca', CONCAT(u.nombre, ' ', u.apellidos) AS usuario" 
		. " FROM entradas e ". 
		"INNER JOIN marcas m ON e.categoria_marca_id = m.id ". 
		"INNER JOIN usuarios u ON e.usuario_id = u.id ". 

		"WHERE e.id = $id";
	$entrada = mysqli_query($conexion, $sql);

	$resultado = array();
	if($entrada && mysqli_num_rows($entrada) >= 1){
		$resultado = mysqli_fetch_assoc($entrada);
	}

	return $resultado;
}

function conseguirEntrada1($conexion,  $limit = null,  $id){
	$sql = "SELECT z.*, c.nombre AS 'categoria', CONCAT(u.nombre, ' ', u.apellidos) AS usuario"
		  . " FROM entradass z ".
		   "INNER JOIN categorias c ON z.categoria_id = c.id ".
		   "INNER JOIN usuarios u ON z.usuario_id = u.id ".
		   
		   "WHERE z.id = $id";
	$entrada = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entrada && mysqli_num_rows($entrada) >= 1){
		$resultado = mysqli_fetch_assoc($entrada);
	}
	
	return $resultado;
	if(!empty($categoria)){
		$sql .= "WHERE z.categoria_id = $categoria ";
	}
	
	$sql .= "ORDER BY z.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 4";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}


function conseguirRespuesta($conexion, $id){
	$sql = "SELECT z.*, c.nombre AS 'categoria', CONCAT(u.nombre, ' ', u.apellidos) AS usuario"
		  . " FROM entradass z ".
		   "INNER JOIN categorias c ON z.categoria_id = c.id ".
		   "INNER JOIN usuarios u ON z.usuario_id = u.id ".
		   "WHERE z.id = $id";
		   
		  
	$entrada = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entrada && mysqli_num_rows($entrada) >= 1){
		$resultado = mysqli_fetch_assoc($entrada);
	}
	
	return $resultado;
}

function conseguirEntradas($conexion, $limit = null, $categoria = null, $busqueda = null){
	$sql="SELECT e.*, c.nombre AS 'categoria' FROM entradas e ".
	
		 "INNER JOIN categorias c ON e.categoria_id = c.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE e.categoria_id = $categoria ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE e.titulo LIKE '%$busqueda%' ";
	}
	
	
	$sql .= "ORDER BY e.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 6";
		$sql .= "LIMIT 20";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}
function conseguirCincoEntradas($conexion, $limit = null, $categoria = null, $busqueda = null){
	$sql="SELECT e.*, c.nombre AS 'categoria' FROM entradas e ".
	
		 "INNER JOIN categorias c ON e.categoria_id = c.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE e.categoria_id = $categoria ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE e.titulo LIKE '%$busqueda%' ";
	}
	
	
	$sql .= "ORDER BY e.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 6";
		$sql .= "LIMIT 5";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}

function conseguirEntradasMarcas($conexion, $limit = null, $categoria_marca = null, $busqueda = null){
	$sql="SELECT es.*, cm.nombre AS 'categoria_marca' FROM entradas es ".
	
		 "INNER JOIN categoria_marca cm ON es.categoria_marca_id = cm.id ";
	
	if(!empty($categoria_marca)){
		$sql .= "WHERE es.categoria_marca_id = $categoria_marca ";
	}	
	
	if(!empty($busqueda)){
		$sql .= "WHERE es.titulo LIKE '%$busqueda%' ";
	}
	
	
	$sql .= "ORDER BY es.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 6";
		$sql .= "LIMIT 6";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}


function conseguirNombreMarcas($conexion, $limit = null, $categoria_marca = null, $busqueda = null){
	$sql="SELECT e.*, c.nombre AS 'categoria_marca' FROM marcas e ".
	
		 "INNER JOIN categoria_marca c ON e.categoria_marca_id = c.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE e.categoria_marca_id = $categoria_marca ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE e.titulo LIKE '%$busqueda%' ";
	}
	
	
	$sql .= "ORDER BY e.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 6";
		$sql .= "LIMIT 6";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}


function conseguirFraudes($conexion, $limit = null, $categoria = null, $busqueda = null){
	$sql="SELECT f.*, c.nombre AS 'categoria' FROM fraudes f ".
	
		 "INNER JOIN categoria_fraude c ON e.categoria_fraude_id = c.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE f.categoria_fraude_id = $categoria ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE f.titulo LIKE '%$busqueda%' ";
	}
	
	
	$sql .= "ORDER BY f.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 6";
		$sql .= "LIMIT 6";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}

function conseguirEntradas_Fraude($conexion, $limit = null, $categoria = null, $busqueda = null){
	$sql="SELECT f.*, c.nombre AS 'categoria' FROM fraudes f ".
	
		 "INNER JOIN categoria_fraude c ON f.categoria_fraude_id = c.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE f.categoria_id = $categoria ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE f.nombre LIKE '%$busqueda%' ";
	}
	
	
	$sql .= "ORDER BY f.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 6";
		$sql .= "LIMIT 6";
	}
	
	$fraudes = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($fraudes && mysqli_num_rows($fraudes) >= 1){
		$resultado = $fraudes;
	}
	
	return $fraudes;
}

function conseguirEntradasTodas($conexion, $limit = null, $categoria = null, $busqueda = null){
	$sql="SELECT e.*, c.nombre AS 'categoria' FROM entradas e ".
	
		 "INNER JOIN categorias c ON e.categoria_id = c.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE e.categoria_id = $categoria ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE e.titulo LIKE '%$busqueda%' ";
	}
	
	
	$sql .= "ORDER BY e.id DESC ";

	if($limit){
		// $sql = $sql." LIMIT 6";
		$sql .= "LIMIT 50";
	}
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}

function conseguirEntradas_titulo($conexion, $limit = null, $categoria_titulo = null, $busqueda = null){
	$sql="SELECT e.*, c.nombre AS 'categoria_titulo' FROM entradas e ".
	
		 "INNER JOIN categoria_titulo c ON e.categoria_titulo_id = c.id ";
	
	if(!empty($categoria_titulo)){
		$sql .= "WHERE e.categoria_titulo_id = $categoria_titulo ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE e.titulo LIKE '%$busqueda%' ";
	}
	
	
	$sql .= "ORDER BY e.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 6";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}


function conseguirDosEntradas($conexion, $limit = null, $categoria = null, $busqueda = null){
	$sql="SELECT e.*, c.nombre AS 'categoria' FROM entradas e ".
	
		 "INNER JOIN categorias c ON e.categoria_id = c.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE e.categoria_id = $categoria ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE e.titulo LIKE '%$busqueda%' ";
	}
	
	
	$sql .= "ORDER BY e.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 2";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}


function conseguirEntradasIndex($conexion, $limit = null, $categoria = null, $busqueda = null){
	$sql="SELECT e.*, c.nombre AS 'categoria' FROM entradas e ".
	
		 "INNER JOIN categorias c ON e.categoria_id = c.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE e.categoria_id = $categoria ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE e.titulo LIKE '%$busqueda%' ";
	}
	
	
	$sql .= "ORDER BY e.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 8";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}


//ConseguirEntradas de prueba2
function conseguirEntradas2($conexion, $limit = null, $categoria = null, $busqueda = null){
	$sql="SELECT p.*, c.nombre AS 'categoria' FROM prueba2 p ".
	
		 "INNER JOIN categorias c ON p.categoria_id = c.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE p.categoria_id = $categoria ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE p.titulo LIKE '%$busqueda%' ";
	}
	
	
	$sql .= "ORDER BY p.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 4";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}

function prueba($conexion, $limit=null, $sql){
	$sql="select * from entradass es where es.respuesta_id = entrada.id;";
	$sql .= "ORDER BY z.id DESC ";

	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 100000";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}


function conseguirEntradas1($conexion, $limit = null){
	$sql="SELECT z.*, e.id AS 'entradas', CONCAT(u.nombre, ' ', u.apellidos) AS usuario FROM entradass z ".
	
		 "INNER JOIN entradas e ON z.respuesta_id = e.id ".
		 "INNER JOIN usuarios u ON z.usuario_id = u.id ";
	
	
	
	$sql .= "ORDER BY z.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 10000";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}
function conseguirEntradasa($conexion, $limit = null){
	$sql="SELECT z.*, e.id AS 'prueba2', CONCAT(u.nombre, ' ', u.apellidos) AS usuario FROM entradass z ".
	
		 "INNER JOIN prueba2 e ON z.respuesta_id = e.id ".
		 "INNER JOIN usuarios u ON z.usuario_id = u.id ";
	
	
	
	$sql .= "ORDER BY z.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 10000";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}



function conseguirEntradass($conexion, $limit = null, $categoria = null, $busqueda = null){
	$sql="SELECT e.*, c.nombre AS 'categoria' FROM entradas e ".
	
		 "INNER JOIN categorias c ON e.categoria_id = c.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE e.categoria_id = $categoria ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE e.empresa LIKE '%$busqueda%' ";
	}
	
	
	$sql .= "ORDER BY e.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 4";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}

function conseguirEntradass2($conexion, $limit = null, $categoria = null, $busqueda = null){
	$sql="SELECT e.*, c.nombre AS 'categoria' FROM entradas e ".
	
		 "INNER JOIN categorias c ON e.categoria_id = c.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE e.categoria_id = $categoria ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE e.empresa LIKE '%$busqueda%' ";
	}
	
	
	$sql .= "ORDER BY e.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 4";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}

function conseguirEntradass3($conexion, $limit = null, $categoria = null, $busqueda = null){
	$sql="SELECT p.*, c.nombre AS 'categoria' FROM prueba2 p ".
	
		 "INNER JOIN categorias c ON p.categoria_id = c.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE p.categoria_id = $categoria ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE p.titulo LIKE '%$busqueda%' ";
	}
	
	
	$sql .= "ORDER BY p.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 4";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}

function conseguirEntradass4($conexion, $limit = null, $categoria = null, $busqueda = null){
	$sql="SELECT p.*, c.nombre AS 'categoria' FROM prueba2 p ".
	
		 "INNER JOIN categorias c ON p.categoria_id = c.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE p.categoria_id = $categoria ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE p.empresa LIKE '%$busqueda%' ";
	}
	
	
	$sql .= "ORDER BY p.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 4";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}


function jose($conexion, $id){
	$sql = "SELECT * FROM entradass
	INNER JOIN entradas.
	ON entradass.identificador = entradas.id
	WHERE identificador='$id' ORDER BY id ASC;";
	
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
		
	}
	
	return $entradas;
}

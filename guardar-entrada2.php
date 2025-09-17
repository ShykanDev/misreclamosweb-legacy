<?php

if (isset($_POST)) {

	require_once 'includes/conexion.php';

	$titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;


	$descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;

	$respuesta_id = isset($_POST['respuesta_id']) ? mysqli_real_escape_string($db, $_POST['respuesta_id']) : false;

	$confirmar_id = isset($_POST['confirmar_id']) ? mysqli_real_escape_string($db, $_POST['confirmar_id']) : false;

	$categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;

	$identificador = isset($_POST['identificador']) ? mysqli_real_escape_string($db, $_POST['identificador']) : false;

	$usuario = $_SESSION['usuario']['id'];

	// Validación
	$errores = array();

	if (empty($titulo)) {
		$errores['titulo'] = 'El titulo no es válido';
	}

	if (empty($descripcion)) {
		$errores['descripcion'] = 'La descripción no es válida';
	}

	if (empty($categoria) && !is_numeric($categoria)) {
		$errores['categoria'] = 'La categoría no es válida';
	}

	if (count($errores) == 0) {
		if (isset($_GET['editar'])) {
			$entrada_id = $_GET['editar'];
			$usuario_id = $_SESSION['usuario']['id'];


			$sql = "UPDATE entradas SET titulo='$titulo', descripcion='$descripcion', categoria_id=$categoria " .
				" WHERE id = $entrada_id AND usuario_id = $usuario_id";
		} else {
			$sql = "INSERT INTO entradass VALUES(null,  $respuesta_id,  $confirmar_id, $usuario, $categoria,  '$titulo', '$descripcion', CURDATE());";
		}

		$guardar = mysqli_query($db, $sql);

		header("Location:entrada.php?id=$respuesta_id ");
	} else {

		$_SESSION["errores_entrada"] = $errores;

		if (isset($_GET['editar'])) {
			header("Location: blog.php");
		} else {
			header("Location: crear-entradas.php");
		}
	}
}

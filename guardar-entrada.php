<?php
if (isset($_POST)) {
    require_once 'includes/conexion.php';

    //Datos de la imágen
    $nombre_imagen = $_FILES['imagen']['name'];
    $tamaño_imagen = $_FILES['imagen']['size'];
    $tipo_imagen = $_FILES['imagen']['type'];
    //Nombre de la carpeta
    $ruta = "archivos";
    if ($tipo_imagen == "image/jpg"  || $tipo_imagen == "image/jpeg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/gif") {
        //Se le asigna un tamaño de 5mb a la imagen
        if ($tamaño_imagen <= 5000000) {
            //Ruta de la imágen
            $carpeta_destino = $ruta . "/" . $nombre_imagen;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino);
        }
    } else {
    }

    $nombre_imagen_2 = $_FILES['imagen_2']['name'];
    $tamaño_imagen_2 = $_FILES['imagen_2']['size'];
    $tipo_imagen_2 = $_FILES['imagen_2']['type'];
    //Nombre de la carpeta
    $ruta = "archivos";
    if ($tipo_imagen_2 == "image/jpg"  || $tipo_imagen_2 == "image/jpeg" || $tipo_imagen_2 == "image/png" || $tipo_imagen_2 == "image/gif") {
        //Se le asigna un tamaño de 5mb a la imagen_2
        if ($tamaño_imagen_2 <= 5000000) {
            //Ruta de la imágen
            $carpeta_destino_2 = $ruta . "/" . $nombre_imagen_2;
            move_uploaded_file($_FILES['imagen_2']['tmp_name'], $carpeta_destino_2);
        }
    } else {
    }

    $nombre_imagen_3 = $_FILES['imagen_3']['name'];
    $tamaño_imagen_3 = $_FILES['imagen_3']['size'];
    $tipo_imagen_3 = $_FILES['imagen_3']['type'];
    //Nombre de la carpeta
    $ruta = "archivos";
    if ($tipo_imagen_3 == "image/jpg"  || $tipo_imagen_3 == "image/jpeg" || $tipo_imagen_3 == "image/png" || $tipo_imagen_3 == "image/gif") {
        //Se le asigna un tamaño de 5mb a la imagen_3
        if ($tamaño_imagen_3 <= 5000000) {
            //Ruta de la imágen
            $carpeta_destino_3 = $ruta . "/" . $nombre_imagen_3;
            move_uploaded_file($_FILES['imagen_3']['tmp_name'], $carpeta_destino_3);
        }
    } else {
    }

    $nombre_imagen_4 = $_FILES['imagen_4']['name'];
    $tamaño_imagen_4 = $_FILES['imagen_4']['size'];
    $tipo_imagen_4 = $_FILES['imagen_4']['type'];
    //Nombre de la carpeta
    $ruta = "archivos";
    if ($tipo_imagen_4 == "image/jpg"  || $tipo_imagen_4 == "image/jpeg" || $tipo_imagen_4 == "image/png" || $tipo_imagen_4 == "image/gif") {
        //Se le asigna un tamaño de 5mb a la imagen_4
        if ($tamaño_imagen_4 <= 5000000) {
            //Ruta de la imágen
            $carpeta_destino_4 = $ruta . "/" . $nombre_imagen_4;
            move_uploaded_file($_FILES['imagen_4']['tmp_name'], $carpeta_destino_4);
        }
    } else {
    }


    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;

    $categoria = isset($_POST['categoria']) ? mysqli_real_escape_string($db, $_POST['categoria']) : false;

    $tipo_reclamo = isset($_POST['tipo_reclamo']) ? mysqli_real_escape_string($db, $_POST['tipo_reclamo']) : false;

    $titulo_comentario = isset($_POST['titulo_comentario']) ? mysqli_real_escape_string($db, $_POST['titulo_comentario']) : false;

    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;

    $imagen = isset($_POST['imagen']) ? mysqli_real_escape_string($db, $_POST['imagen']) : false;

    $imagen_2 = isset($_POST['imagen_2']) ? mysqli_real_escape_string($db, $_POST['imagen_2']) : false;

    $imagen_3 = isset($_POST['imagen_3']) ? mysqli_real_escape_string($db, $_POST['imagen_3']) : false;

    $imagen_4 = isset($_POST['imagen_4']) ? mysqli_real_escape_string($db, $_POST['imagen_4']) : false;


    $nombre_usuario = isset($_POST['nombre_usuario']) ? mysqli_real_escape_string($db, $_POST['nombre_usuario']) : false;

    $usuario = $_SESSION['usuario']['id'];


    // Validación
    $errores = array();

    if (empty($titulo)) {
        $errores['titulo'] = 'Escriba el nombre, marca de la persona, servicio o empresa';
    }

    if (empty($tipo_reclamo)) {
        $errores['tipo_reclamo'] = 'Seleccione una opción';
    }

    if (empty($titulo_comentario)) {
        $errores['titulo_comentario'] = 'Ponga un titulo de la forma más breve';
    }

    if (empty($descripcion)) {
        $errores['descripcion'] = 'Este campo es obligatorio';
    }

    if (empty($categoria) && !is_numeric($categoria)) {
        $errores['categoria'] = 'Seleccione una opción';
    }

    if (count($errores) == 0) {
        if (isset($_GET['editar'])) {
            $entrada_id = $_GET['editar'];
            $usuario_id = $_SESSION['usuario']['id'];
            $sql = "UPDATE entradas SET 
            nombre_usuario='$nombre_usuario',
			titulo='$titulo',
            tipo_reclamo='$tipo_reclamo',
            titulo_comentario='$titulo_comentario',
            descripcion='$descripcion',
            categoria_id=$categoria,
             imagen='$carpeta_destino',
             imagen_2='$carpeta_destino_2',
             imagen_3='$carpeta_destino_3',
             imagen_4='$carpeta_destino_4'" .
                " WHERE id = $entrada_id AND usuario_id = $usuario_id";

            $guardar = mysqli_query($db, $sql);
            header("Location:confirmar-comentario.php?id=" . $_GET['editar']);
        } else {
            $sql = "INSERT INTO entradas VALUES(null, $usuario, '$categoria', '$nombre_usuario', '$titulo',   '$tipo_reclamo', '$titulo_comentario', '$descripcion', '$carpeta_destino', '$carpeta_destino_2', '$carpeta_destino_3', '$carpeta_destino_4', CURDATE());";

            $guardar = mysqli_query($db, $sql);
            header("Location:confirmar-comentario-nuevo.php");
        }
    } else {

        $_SESSION["errores_entrada"] = $errores;

        if (isset($_GET['editar'])) {
            header("Location: editar-entrada.php?id=" . $_GET['editar']);
        } else {
            header("Location: crear-entradas.php");
        }
    }
}

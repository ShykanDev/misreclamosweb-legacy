<?php
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST)) {
	// Conexión a la base de datos
	require_once 'includes/conexion.php';

	// Iniciar sesión
	if (!isset($_SESSION)) {
		session_start();
	}

	// Recorger los valores del formulario de registro
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
	$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $pais = isset($_POST['pais']) ? mysqli_real_escape_string($db, $_POST['pais']) : false;
    $tipo = isset($_POST['tipo']) ? mysqli_real_escape_string($db, $_POST['tipo']) : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
	$password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

	// Array de errores
	$errores = array();

	// Validar los datos antes de guardarlos en la base de datos
	// Validar campo nombre
	if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
		$nombre_validado = true;
	} else {
		$nombre_validado = false;
		$errores['nombre'] = "Este campo es obligatorio";
	}

	// Validar apellidos
	if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
		$apellidos_validado = true;
	} else {
		$apellidos_validado = false;
		$errores['apellidos'] = "Este campo es obligatorio";
    }

    if(!empty($tipo) && !is_numeric($tipo) && !preg_match("/[0-9]/", $tipo)){
        $tipo_validado = true;
    }else{
        $tipo_validado = true;
        $errores['tipo'] = "Este campo es obligatorio";
    }
    

	// Validar pais
	if (!empty($pais) && !is_numeric($pais) && !preg_match("/[0-9]/", $pais)) {
		$pais_validado = true;
	} else {
		$pais_validado = false;
		$errores['pais'] = "Este campo es obligatorio";
	}

	// Validar el email
	if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$email_validado = true;
	} else {
		$email_validado = false;
		$errores['email'] = "El email es invalido";
	}

	// Validar la contraseña
	if (!empty($password)) {
		$password_validado = true;
	} else {
		$password_validado = false;
		$errores['password'] = "La contraseña no debe estar vacía";
	}

	$guardar_usuario = false;

	if (count($errores) == 0) {
		$guardar_usuario = true;

		// Cifrar la contraseña
		$password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

		// INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		$sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$pais', '$tipo', '$email', '$password_segura', CURDATE());";
		$guardar = mysqli_query($db, $sql);

		//		var_dump(mysqli_error($db));
		//		die();

		if ($guardar) {
			$_SESSION['completado'] = "El registro se ha completado con éxito";

			$mensaje= "
            <!DOCTYPE html>
            <html lang='en'>
            
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Document</title>
            </head>
            
            <body>
                <style type='text/css'>
                    .contenedor {
                        max-width: 1200px;
                        margin: 0 auto;
                    }
                    
                    body {
                        font-family: 'Changa', sans-serif;
                        font-weight: 200;
                        line-height: 1.7;
                    }
                    
                    a {
                        color: black;
                        text-decoration: none;
                        font-weight: 400;
                    }
                    
                    h1 {
                        font-weight: 200;
                        font-size: 30px;
                    }
                    
                    h3 {
                        font-weight: 200;
                        font-size: 24px;
                    }
                    
                    .logo img {
                        width: 20rem;
                        margin: 0;
                    }
                    
                    #mayus {
                        text-transform: uppercase;
                    }
                    
                    .centrar-texto {
                        text-align: center;
                    }
                    
                    .flex {
                        display: flex;
                        justify-content: space-between;
                    }
                    
                    .cuadros-opciones {
                        padding: 1rem;
                        box-shadow: 1px 1px 3px rgb(224, 224, 224);
                    }
                    
                    .btn-general {
                        background-color: rgb(35, 35, 220);
                        padding: 1rem;
                        border-radius: 1rem;
                        border: none;
                        color: white;
                        margin: 10px 0;
                        display: inline-block;
                    }
                    
                    @media (min-width: 950px) {
                        .dividir {
                            display: flex;
                            justify-content: space-between;
                            flex-wrap: wrap;
                        }
                        .dos-partes {
                            flex-basis: calc(50% - 2rem);
                        }
                        .tres-partes {
                            flex-basis: calc(33.3% - 2rem);
                        }
                    }
                </style>
                <div class='contenedor'>
                    <div class='dividir centrar-texto'>
                        <div class='dos-partes'>
                            <a href='http://www.misreclamos.com' target='_blank' rel='noopener noreferrer'>Inicio</a>
                        </div>
                        <div class='dos-partes'>
                            <a href='http://www.misreclamos.com/nosotros.php' target='_blank' rel='noopener noreferrer'>Saber Más</a>
                        </div>
                    </div>
                    <div class='centrar-texto logo'>
                        <h1>Bienvenido a
                            <a href='http://www.misreclamos.com' target='_blank' rel='noopener noreferrer'><img src='https://misreclamos.com/img/logo.gif' alt=''></a>
                        </h1>
                    </div>
                    <p>Hola y bienvenido a una comunidad donde los reclamos, experiencias y advertencias, podrán ayudarte en prevenir una situación no favorable con alguna marca sea en productos o servicios.</p>
                    <h3>¿Que acciones puedo realizar?</h3>
            
                    <div class='dividir'>
                        <div class='tres-partes'>
                            <div class='cuadros-opciones'>
                                <p class='centrar-texto' id='mayus'>Visualizar los Comentarios</p>
                                <br>
                                <p>En algún momento al comprar un producto o contratar un servicio existe la incertidumbre de ¿Si será buena marca? ¿Cumplirá con su propósito? ¿Tiene buenas recomendaciones? O solo querer saber las experiencias de anteriores usuarios.
                                </p>
            
                                <p>Aquí podrás visualizar los reclamos, advertencias, consejos y recomendaciones que tiene ese marca que podrán ayudarte a tomar una decisión correcta al comprar sus productos o contratar sus servicios.</p>
            
                                <div class='centrar-texto'>
                                    <a class='btn-general' href='https://misreclamos.com/blog.php' target='_blank' rel='noopener noreferrer'>Visualizar Experiencias</a>
                                </div>
                            </div>
                        </div>
            
                        <div class='tres-partes'>
                            <div class='cuadros-opciones'>
                                <p class='centrar-texto' id='mayus'>Crear Comentario</p>
                                <br>
                                <p>En ocasiones, los problemas que surgen al comprar un producto son a corto y mediano plazo.</p>
                                <p>Compartiendo nuestras experiencia estaremos ayudando a los demás en no pasar la misma situación e inconvenientes haciendo público su reclamo o experiencia.</p>
                                <div class='centrar-texto'>
                                    <a class='btn-general' href='https://misreclamos.com/crear-entradas.php' target='_blank' rel='noopener noreferrer'>Crear comentario</a>
                                </div>
                            </div>
                        </div>
            
                        <div class='tres-partes'>
                            <div class='cuadros-opciones'>
                                <p class='centrar-texto' id='mayus'>Conocer las Soluciones</p>
                                <br>
                                <p>Al tener una cantidad significante de reclamos hacia una marca, este podrá responder de forma directa o general, proporcionando una solución, defensa o comentario que podrá ayudar a solucionar esos inconvenientes o aclarar algunos
                                    aspectos.
                                </p>
                                <p> No se podrá comunicar directamente con el creador del comentario, solo si la persona así lo desea.</p>
                                <div class='centrar-texto'>
                                    <a class='btn-general' href='http://www.misreclamos.com/blog.php' target='_blank' rel='noopener noreferrer'>Crear comentario</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
            
            </html>";
			$mail = new PHPMailer();
			$mail->IsSMTP(); // enable SMTP
			//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true; // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
			$mail->CharSet = 'UTF-8'; //This comand acept charchter alphanumeric
			$mail->Host = "ns56.hostgator.mx ";
			$mail->Port = 465; // or 587
			$mail->IsHTML(true); //Active HTML
			$mail->Username = "contacto@misreclamos.com";//User or count primary
			$mail->Password = "Contact@2021"; //Password the count
			$mail->SetFrom("contacto@misreclamos.com");//Email main
			$mail->Subject = "Bienvenido a misreclamos.com";//Title of the message
			$mail->Body = $mensaje;//Message 
			$mail->AddAddress($email);//Email the second person
			if (!$mail->Send()) {
				echo "Mailer Error: " . $mail->ErrorInfo; //Message if exist error 
			}else{
				header('Location: register.php');
			}
		} else {
			$_SESSION['errores']['general'] = "Fallo al guardar el usuario, verifica tus datos, puede que este usuario ya exista";
		}
	} else {
		$_SESSION['errores'] = $errores;
	}
}
header('Location: register.php');

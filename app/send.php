<?php
require './PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$to = "soporte@webpuro.net"; // Nuestro correo de contacto

// recogeremos los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$movil = $_POST['movil'];
$asunto = $_POST['asunto'];
$mensaje = nl2br($_POST['mensaje']);

if($nombre == "" || $movil == "" || $email == "" || $asunto == "" || $mensaje == ""):
	echo '<div class="alert alert-danger">Todos los campos son requeridos para el envio</div>';
else:

	$mail->From = $email;
	$mail->addAddress($to);
	$mail->Subject = $asunto;
	$mail->movil = $movil;
	$mail->isHtml(true);
	$mail->Body = '<strong>'.$nombre.'</strong> le ha contactado desde su web, y le ha enviado el siguiente mensaje: <br><p>'.$mensaje.'</p>';

	$mail->CharSet = 'UTF-8';
	$mail->send();
endif;
?>
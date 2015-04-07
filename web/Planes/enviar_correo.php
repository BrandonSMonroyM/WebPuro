<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WebEnvio • WebPuro</title>
	<link rel="stylesheet" href="../FontAwesome/css/font-awesome.css">
	<link rel="shortcut icon" href="../images/favicon.ico" />
	<link rel="stylesheet" href="../css/estilos-planes.css">
</head>
<body class="envio-body">
<?php 

	$nombre  = $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$email   = $_POST['email'];
	$country = $_POST['country'];
	$city    = $_POST['city'];
	$subject = $_POST['subject'];
	$messaje = $_POST['messaje'];
	$to      = 'soporte@webpuro.net';
	$cuerpo  = "Nombre del Cliente: " . $nombre . " " . $apellido . "\n" . "E-email: " . $email . "\n" . "Páis: " . $country . "\n" . "Ciudad: " . $city . "\n" . $messaje;

	if (is_null($_POST['nombre']) && is_null($_POST['apellido']) && is_null($_POST['email']) && is_null($_POST['country']) && is_null($_POST['city']) && is_null($_POST['messaje']) && is_null($_POST['subject'])) {
		
		echo "
		<header class='head-aviso'>
			<img src='../images/web-puro-net.png'>
			<h1>WebPuro</h1>
		</header>
		<div class='aviso good'><p><i class='fa fa-check fa-2x'></i> </p><p>Tu Cotización ha sido eviada correctamente</p></div>
		";

		mail($to, $subject, $cuerpo);

	}else{
		echo "
		<header class='head-aviso'>
			<img src='../images/web-puro-net.png'>
			<h1>WebPuro</h1>
		</header>
		<div class='aviso bad'><p><i class='fa fa-times fa-2x'></i> </p><p>Hay algún problema al enviar revisa que hallas llenado todos los campos</p></div>
		";
	}

?>
</body>
</html>
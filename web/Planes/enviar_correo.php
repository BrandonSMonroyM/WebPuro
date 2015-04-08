<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Refresh" content="2;url= http://pruebas.webpuro.net/WebPuro/web/Planes/plan-economico.html">
<head>
    <meta charset="UTF-8">
    <title>WebEnvio • WebPuro</title>
    <link rel="stylesheet" href="../FontAwesome/css/font-awesome.css">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" href="../css/estilos-planes.css">
</head>
<body class="envio-body">
<?php


if (
    //is_null($_POST['nombre']) && is_null($_POST['apellido']) && is_null($_POST['email']) && is_null($_POST['country']) && is_null($_POST['city']) && is_null($_POST['messaje']) && is_null($_POST['subject'])
    isset($_POST['subject']) && !empty($_POST['subject']) &&
    isset($_POST['nombre']) && !empty($_POST['nombre']) &&
    isset($_POST['apellido']) && !empty($_POST['apellido']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['country']) && !empty($_POST['country']) &&
    isset($_POST['city']) && !empty($_POST['city']) &&
    isset($_POST['messaje']) && !empty($_POST['messaje'])) {
    $nombre  = $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $email   = $_POST['email'];
    $country = $_POST['country'];
    $city    = $_POST['city'];
    $subject = $_POST['subject'];
    $messaje = $_POST['messaje'];
    $to      = 'frontend@webpuro.net';
    $cuerpo  = "Nombre del Cliente: " . $nombre . " " . $apellido . "\n" . "E-email: " . $email . "\n" . "Páis: " . $country . "\n" . "Ciudad: " . $city . "\n" . $messaje;

    echo "
		<header class='head-aviso'>
			<img src='../images/web-puro-net.png'>
			<h1>WebPuro</h1>
		</header>
		<div class='aviso good'><p><i class='fa fa-check fa-2x'></i> </p><p>Tu Cotización ha sido eviada correctamente</p></div>
		";

    mail($to, $subject, $cuerpo,$email);

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
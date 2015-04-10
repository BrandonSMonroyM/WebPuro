<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Refresh" content="2;url= http://webpuro.net/web/Planes/plan-visionario.html">
<head>
    <meta charset="UTF-8">
    <title>WebEnvio • WebPuro</title>
    <link rel="stylesheet" href="../FontAwesome/css/font-awesome.css">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" href="../css/estilos-planes.css">
</head>
<body class="envio-body">
<?php


if (isset($_POST['nombre'])&&($_POST['apellido']!='')&&($_POST['email']!='')&&($_POST['subject']!='')&&($_POST['country']!='')&&($_POST['city']!='')&&($_POST['messaje']!='')) {
        $nombre  = $_POST['nombre'];
        $email   = $_POST['email'];
        $apellido   = $_POST['apellido'];
        $country   = $_POST['country'];
        $city   = $_POST['city'];
        $mensaje = $_POST['messaje'];
        $asunto = $_POST['subject'];

        //Contenido del Mensaje
        $titulo    = 'Soporte • ' . $asunto . ' • WebPuro';
        $contenido = "Nombre:" . $nombre . ' ' . $apellido .  "<br>" . "Email: <a href='mailito:$email'>" . $email . "</a><br>" . 'País: ' . $country . '<br>Ciudad: ' . $city . "<br>Mensaje: <br>" . $mensaje ;

        $envio = mail('soporte@webpuro.net', $titulo, $contenido,'Content-type: text/html charset=utf8');

        if ($envio == true) {
            echo "<header class='head-aviso'>
            <img src='../images/web-puro-net.png'>
            <h1>WebPuro</h1>
        </header>
        <div class='aviso good'><p><i class='fa fa-check fa-2x'></i> </p><p>Tu Cotización ha sido eviada correctamente</p></div>
        ";
        }else{
            echo "Se ha producido un error al enviar :(.";
        }

    }else{
        echo "<header class='head-aviso'>
            <img src='../images/web-puro-net.png'>
            <h1>WebPuro</h1>
        </header>
        <div class='aviso bad'><p><i class='fa fa-times fa-2x'></i> </p><p>Hay algún problema al enviar revisa que hallas llenado todos los campos</p></div>";
    }

?>
</body>
</html>
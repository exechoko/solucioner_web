<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$nombre = $_POST['nombre'];
$correo_electronico= $_POST['staticEmail'];
$opinion=$_POST['exampleFormControlTextarea1'];

echo $nombre . " " . $correo_electronico . " " . $opinion;
/*
$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $correo_electronico . " \r\n";
$mensaje .="Mensaje: ".$_POST['opinion'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$headers = "From: " . $correo_electronico;

$para = "appsolucionet@gmail.com";
$asunto = "Contacto desde la web";

mail($para, $asunto, utf8_decode($mensaje), $headers);

echo 'Mensaje enviado correctamente';*/

/*
php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@hostinger-tutorials.com";
    $to = "test@hostinger.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
php
*/

?> 

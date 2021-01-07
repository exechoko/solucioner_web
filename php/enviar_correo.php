<?php
$nombre = $_POST['nombre'];
$correo_electronico= $_POST['staticEmail'];
$opinion= $_POST['mensaje'];

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $correo_electronico . " \r\n";
$mensaje .="Mensaje: " .$opinion . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$headers = "From: " . $correo_electronico;

$para = "appsolucionet@gmail.com";
$asunto = "Contacto desde la web";

mail($para, $asunto, utf8_decode($mensaje), $headers);

echo 'Mensaje enviado correctamente';

?> 

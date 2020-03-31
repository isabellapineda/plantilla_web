<?php

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido']; 
$Correo = $_POST['Correo']; 
$Compañia = $_POST['Compañia'];
$Celular = $_POST['Celular']; 


$header = 'From: ' . $Correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $Nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $Correo . " \r\n";
$mensaje .= "Apellido: " . $_POST['Apellido'] . " \r\n";
$mensaje .= "Compañia: " . $_POST['Compañia'] . " \r\n";
$mensaje .= "Celular: " . $_POST['Celular'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'isabellapineda833@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");



?>
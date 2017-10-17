<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$tipo_evento = $_POST['tipo_evento'];
$invitados = $_POST['invitados'];
$lugar = $_POST['lugar'];
$fecha = $_POST['fecha'];
$mensaje = $_POST['mensaje'];

$formcontent= " From: $nombre \n 
                Email: $email \n
                Tel: $tel \n 
                Tipo de evento: $tipo_evento \n 
                Invitados Nº: $invitados \n 
                Lugar: $lugar \n 
                Fecha: $fecha \n 
                Mensaje: $mensaje ";

$destinatario = "fiorella@delitaller.com";
$subject = "Consulta desde dellitaller.com";
$mailheader = "From: $email \r\n";
mail($destinatario, $subject, $formcontent, $mailheader) or die("Error!");
echo "Gracias! A la brevedad nos contactaremos" . " -" . "<a href='index.html' style='text-decoration:none;color:#222;'>  Regresar</a>";
?>


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

$destinatario = "cronoscopios@gmail.com";
$subject = "Consulta desde dellitaller.com";
$mailheader = "From: $email \r\n";
mail($destinatario, $subject, $formcontent, $mailheader) or die("Error!");
echo 

"<div data-form-alert='true'>
 <div hidden='' data-form-alert-success='true' class='alert alert-form alert-success text-xs-center'>¡Gracias! A la brevedad nos pondremos en contacto.</div>
</div>";

?>

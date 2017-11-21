<?php

    if( isset($_POST['email']) && !empty($_POST['email']) && $_POST['email'] != ''){
        exit();
    } else {
        $email = $_POST['contacEmail'];
        $answer = $_POST['catpcha'];
        
        if( $answer === '2' ){
            //proceder
            $nombre = $_POST['nombre'];
            $email = $_POST['contacEmail'];
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
            $subject = "Consulta desde Delitaller.com";
            $mailheader = "From: $email \r\n";

            mail($destinatario, $subject, $formcontent, $mailheader) or die("Error!");
            echo "<br><a href='index.html' style='text-decoration:none;color:#fff;background-color:rgb(138, 206, 208);font-size:2rem;padding:1rem;top: 0px;position: absolute;float: left;left: 0;width: 100%; text-align:center;'>Gracias! a la brevedad nos contactaremos. Regresa a Delitaller</a>";

        } else {
            //exit
            echo "<br><a href='index.html' style='text-decoration:none;color:#fff;background-color:rgb(138, 206, 208);font-size:2rem;padding:1rem;top: 0px;position: absolute;float: left;left: 0;width: 100%; text-align:center;'>¡Gracias! a la brevedad nos contactaremos. Regresa a Delitaller</a>";
        }
    }                            
?>






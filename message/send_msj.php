<?php 
    //Donde se recibe
    $miEmail = 'Luis.Funes86@hotmail.com';

    //Datos de quien lo envia
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    //Mensaje a mi Mail
    $header = "enviado desde Mi Portafolio";
    $mensajeCompleto = $mensaje . "\nAtte.: " .$nombre;

    //Envio del mail
    mail($miEmail, $asunto, $mensajeCompleto, $header);
    echo "<script> alert('correo enviado con exito')</script>";
    echo "<script> setTimeout(\"location.href='mensajes.html'\",1000)</script>";

?>
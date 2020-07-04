<?php
$nombre = $_POST['name'];
$correo = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];


$para = 'wilmercity93@gmail.com.com';
$titulo = $asunto;
$mensaje = $mensaje; 
$cabeceras = 'From:'.$correo."\r\n" . //La direccion de correo desde donde supuestamente se envió
    'Reply-To:'.$correo."\r\n" . //La direccion de correo a donde se responderá (cuando el recepto haga click en RESPONDER)
    'X-Mailer: PHP/' . phpversion();  //información sobre el sistema de envio de correos, en este caso la version de PHP
 
 // echo $para;
 // echo $titulo;
 // echo $mensaje;
 // echo $cabeceras;

 // echo $nombre;
 // echo $correo;
 // echo $mensaje;
 // echo $asunto;



mail($para, $titulo, $mensaje, $cabeceras);
 header("Location:../index.html");


?>
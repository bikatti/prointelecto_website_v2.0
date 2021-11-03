<?php
 $destinatario = 'info@prointelecto.com';
//  $destinatario = 'monlogoteam@gmail.com';

 // esto es al correo al que se enviará el mensaje

 $nombre = $_POST['name'];
 $tl = $_POST['phone'];
 $email = $_POST['email'];

 if(isset($_POST['dejarenblanco'])){
    $dejarenblanco = $_POST['dejarenblanco'];
 }
 if(isset($_POST['nocambiar'])){
    $nocambiar = $_POST['nocambiar'];
 }

 if ($dejarenblanco == '' && $nocambiar == 'http://') { 
    $asunto = "Prospecto de Guía de Registro de Marca";
    
    $header = "Enviado por {$nombre} desde prointelecto.com (Gía Registro de Marca)";

    $mensajeCompleto = "Datos de persona contacto \n\nNombre del prospecto: {$nombre} \nEmail: {$email} \nNúmero de teléfono: {$tl} \n\n {$header}";

    // Enviarlo
    mail($destinatario, $asunto, $mensajeCompleto);
    echo "<script> setTimeout(\"location.href='/guia'\", 1000)</script>";
 }  else {
    echo "<script> setTimeout(\"location.href='/'\", 1000)</script>";
 }

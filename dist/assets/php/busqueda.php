<?php
 $destinatario = 'info@prointelecto.com';
//  $destinatario = 'monlogoteam@gmail.com';

 // esto es al correo al que se enviará el mensaje
 $result = [
     1 => $_POST['marca'],
     2 => $_POST['product']
 ];

 $name_brand = $_POST['marca'];
 $nombre = $_POST['name'];
 $tl = $_POST['phone'];
 $email = $_POST['email'];
 $product = $_POST['product'];

 if(isset($_POST['otro'])){
    $otherFindUs = $_POST['otro'];
 }

 if(isset($_POST['dejarenblanco'])){
    $dejarenblanco = $_POST['dejarenblanco'];
 }
 if(isset($_POST['nocambiar'])){
    $nocambiar = $_POST['nocambiar'];
 }

 if ($dejarenblanco == '' && $nocambiar == 'http://') { 
    // código para enviar el formulario
    $a1 = "\n\nNombre de la marca: {$result[1]}";
    $a2 = "\n\nProductos y/o servicios que distingue: {$result[2]}";
    
    $asunto = "Solicitud de Búsqueda, marca: {$name_brand}";
    $header = "Enviado por {$nombre} desde la página de web de prointelecto.com";

    $mensajeCompleto = "Datos de persona contacto \n\nNombre del prospecto: {$nombre} \nEmail: {$email} \nNúmero de teléfono: {$tl} \n\nDatos de búsqueda:" . $a1 . $a2 . "\n\n {$header}";

    // Enviarlo
    mail($destinatario, $asunto, $mensajeCompleto);
    echo "<script> setTimeout(\"location.href='/mensaje'\", 1000)</script>";
 }  else {
    echo "<script> setTimeout(\"location.href='/'\", 1000)</script>";
 }

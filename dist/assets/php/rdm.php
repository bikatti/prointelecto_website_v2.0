<?php
 $destinatario = 'info@prointelecto.com';
 // esto es al correo al que se enviará el mensaje
 $result = [
     1 => $_POST['direccion'],
     2 => $_POST['actividad'],
     3 => $_POST['experiencia'],
     4 => $_POST['persona']
 ];

 $comentario = $_POST['mensaje'];
 $nombre = $_POST['nombre'];
 $tl = $_POST['numero'];
 $email = $_POST['email'];

 if(isset($_POST['dejarenblanco'])){
    $dejarenblanco = $_POST['dejarenblanco'];
 }
 if(isset($_POST['nocambiar'])){
    $nocambiar = $_POST['nocambiar'];
 }

 if ($dejarenblanco == '' && $nocambiar == 'http://') { 
    // código para enviar el formulario
    $a1 = "\n\n¿Cuál es la ciudad en la que se encuentra ubicada la empresa o actividad comercial relacionada con los productos o servicios de la(s) marca(s) que desea registrar?" ."\n" . $result[1];
    $a2 = "\n\nSeñale la actividad comercial, productos y/o servicios que se identificarán con la(s) marca(s) que desea registrar" ."\n" . $result[2];
    $a3 = "\n\n¿Usted o su empresa tienen alguna experiencia anterior con trámites de registro de marca en el país que desea hacer este trámite?" ."\n" . $result[3];
    $a4 = "\n\n¿Los trámites de registro de marca que le interesa gestionar se harán a nombre de una empresa o de una persona natural?" ."\n" . $result[4];
    
    $asunto = "Forma de Solicitud de información, enviado por " . $nombre;
    $header = "Enviado por " . $nombre . " desde la página de web de prointelecto.com";
    $mensajeCompleto = "Datos de persona contacto:" ."\n\nNombre del cliente: " . $nombre . "\nEmail de contacto: " . $email . "\nNúmero de teléfono: " . $tl ."\n\nRespuestas a las preguntas:" . $a1 . $a2 . $a3 . $a4 . "\n\nComentario:" . "\n" . $comentario . "\n\n" . $header;

    // Enviarlo
    mail($destinatario, $asunto, $mensajeCompleto);
    echo "<script> setTimeout(\"location.href='/mensaje'\", 1000)</script>";
 } 

?>
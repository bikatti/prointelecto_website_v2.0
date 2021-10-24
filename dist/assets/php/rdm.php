<?php
 $destinatario = 'info@prointelecto.com';
 // esto es al correo al que se enviará el mensaje
 $result = [
     1 => $_POST['pais'],
     2 => $_POST['ciudad'],
     3 => $_POST['actividad'],
     4 => $_POST['experiencia'],
     5 => $_POST['persona']
 ];

 $comentario = $_POST['mensaje'];
 $nombre = $_POST['nombre'];
 $tl = $_POST['numero'];
 $email = $_POST['email'];
 $findUs = $_POST['encontrarnos'];

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
    $a1 = "\n\n¿Cuál es el país y la ciudad en la que se encuentra ubicada la empresa o actividad comercial relacionada con los productos o servicios de la(s) marca(s) que desea registrar?\n {$result[2]},{$result[1]}";
    $a2 = "\n\nSeñale la actividad comercial, productos y/o servicios que se identificarán con la(s) marca(s) que desea registrar \n {$result[3]}";
    $a3 = "\n\n¿Usted o su empresa tienen alguna experiencia anterior con trámites de registro de marca en el país que desea hacer este trámite? \n {$result[4]}";
    $a4 = "\n\n¿Los trámites de registro de marca que le interesa gestionar se harán a nombre de una empresa o de una persona natural? \n {$result[5]}";
    
    $asunto = "Forma de Solicitud de información, enviado por {$nombre}";
    $header = "Enviado por {$nombre} desde la página de web de prointelecto.com";
    
    if ($findUs == 'Otros') {
         $mensajeCompleto = "Datos de persona contacto: \n\nNombre del cliente: {$nombre}\nEmail de contacto: {$email} \nNúmero de teléfono: {$tl}\n\nRespuestas a las preguntas:" . $a1 . $a2 . $a3 . $a4 . "\n\nComentario: \n{$comentario}\n\n Se enteraron de nosotros por: {$otherFindUs} \n\n {$header}";
    } else {
         $mensajeCompleto = "Datos de persona contacto: \n\nNombre del cliente: {$nombre}\nEmail de contacto: {$email} \nNúmero de teléfono: {$tl}\n\nRespuestas a las preguntas:" . $a1 . $a2 . $a3 . $a4 . "\n\nComentario: \n{$comentario}\n\nNos encontraron por: {$findUs} \n\n {$header}";
    }
    
    // Enviarlo
    mail($destinatario, $asunto, $mensajeCompleto);
    echo "<script> setTimeout(\"location.href='/mensaje'\", 1000)</script>";
 }  else {
    echo "<script> setTimeout(\"location.href='/'\", 1000)</script>";
 }

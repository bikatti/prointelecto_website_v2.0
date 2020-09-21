<?php
 $destinatario = 'info@prointelecto.com';
 // esto es al correo al que se enviará el mensaje
 $nombre = $_POST['nombre'];
 $mensaje = $_POST['mensaje'];
 $email = $_POST['email'];
 $lugar = $_POST['lugar'];

 $asunto = "Forma simple, enviado por " . $nombre;
 $header = "Enviado por " . $nombre . " desde la página de web de prointelecto.com";
 $mensajeCompleto =  $mensaje . "\n\nAtentamente: " . $nombre . "\nDe: " . $email . "\nDirección: " . $lugar . "\n\n" . $header;

 mail($destinatario, $asunto, $mensajeCompleto);
 echo "<script> setTimeout(\"location.href='/mensaje'\", 1000)</script>";
?>
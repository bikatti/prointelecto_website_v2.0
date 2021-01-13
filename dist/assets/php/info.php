<?php

$destinatario = 'info@prointelecto.com';
// esto es al correo al que se enviará el mensaje
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];

$address = [
    'pais' => $_POST['pais'],
    'ciudad' => $_POST['ciudad']
];

if(isset($_POST['dejarenblanco'])){
    $dejarenblanco = $_POST['dejarenblanco'];
}
if(isset($_POST['nocambiar'])){
    $nocambiar = $_POST['nocambiar'];
}

if ($dejarenblanco == '' && $nocambiar == 'http://') { 
    // código para enviar el formulario
    $asunto = "Forma simple, enviado por " . $nombre;
    $header = "Enviado por " . $nombre . " desde la página de web de prointelecto.com";
    $mensajeCompleto =  $mensaje ."\n\nAtentamente: " . $nombre . "\nDe: " . $email . "\nCiudad y país: {$address['ciudad']}, {$address['pais']} \n\n" . $header;

    // Enviarlo
    mail($destinatario, $asunto, $mensajeCompleto);
    echo "<script> setTimeout(\"location.href='/mensaje'\", 1000)</script>";
} else {
    echo "<script> setTimeout(\"location.href='/'\", 1000)</script>";
}
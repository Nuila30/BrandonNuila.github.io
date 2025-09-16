<?php
// COMPLE/contact.php

header('Content-Type: application/json; charset=utf-8');

// ⚡ Configura aquí tu correo
$destino = "brandonnuila707@gmail.com";

// Validar campos
$nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
$correo = isset($_POST['correo']) ? trim($_POST['correo']) : '';
$mensaje = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';

if ($nombre === '' || $correo === '' || $mensaje === '') {
    echo json_encode([
        "status" => "error",
        "message" => "Todos los campos son obligatorios."
    ]);
    exit;
}

// Sanitizar correo
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        "status" => "error",
        "message" => "Correo electrónico inválido."
    ]);
    exit;
}

// Construir cuerpo del mensaje
$asunto = "Nuevo mensaje desde el portafolio de $nombre";
$cuerpo = "Nombre: $nombre\nCorreo: $correo\nMensaje:\n$mensaje";

// Enviar correo
if (mail($destino, $asunto, $cuerpo)) {
    echo json_encode([
        "status" => "success",
        "message" => "Mensaje enviado correctamente."
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "No se pudo enviar el mensaje. Intenta más tarde."
    ]);
}
?>

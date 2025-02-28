<?php
// Obtener la IP del visitante
$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$fecha = date("Y-m-d H:i:s");

// Formato del texto a guardar
$data = "IP: $ip - User-Agent: $userAgent - Fecha: $fecha\n";

// Guardar en el archivo
file_put_contents("ips.txt", $data, FILE_APPEND | LOCK_EX);

// Redirigir a otra página después de capturar la IP
header("Location: https://www.google.com");
exit();
?>

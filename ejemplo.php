<?php
$host = 'smtp.gmail.com';
$port = 465;

$socket = @fsockopen($host, $port, $errno, $errstr, 10);

if ($socket) {
    echo 'Conexión exitosa.';
    fclose($socket);
} else {
    echo 'Error de conexión: ' . $errstr;
}
?>

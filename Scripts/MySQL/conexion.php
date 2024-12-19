<?php

$dsn = 'mysql:host=junction.proxy.rlwy.net;port=17617;dbname=railway';
$user = 'root';
$password = 'nArnqwCaeoKDfdDPUcgaFkmSJbZplxHc';

try {
    $conexion = new PDO($dsn, $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

?>
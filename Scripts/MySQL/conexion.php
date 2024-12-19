<?php

$host = getenv('MYSQLHOST');
$port = getenv('MYSQLPORT');
$dbname = getenv('MYSQLDATABASE');
$user = getenv('MYSQLUSER');
$password = getenv('MYSQLPASSWORD');

$dsn = "mysql:host=$host;port=$port;dbname=$dbname";

try {
    $conexion = new PDO($dsn, $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}


?>
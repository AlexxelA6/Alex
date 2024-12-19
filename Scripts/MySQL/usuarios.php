<?php
require_once 'conexion.php';

if (isset($_POST['registrar'])) {
    $sql = "INSERT INTO usuarios (nombre_de_cuenta, correo, clave, es_administrador) VALUES ('{$_POST['username']}', '{$_POST['email']}', '{$_POST['password']}', '0')";
    if ($conexion->query($sql)) {
        header("Location: ../../Interfaces/Funcionalidad/menu.php");
        exit();
    } else {
        echo "Error al registrar usuario.";
    }
}
?>

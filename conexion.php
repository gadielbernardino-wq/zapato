<?php
session_start();
// Datos CORRECTOS para XAMPP
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "zapateria_db"; // Asegúrate de crear esta BD en PHPMyAdmin

// Conexión con manejo de errores
$conexion = new mysqli($servidor, $usuario, $contraseña, $bd);

if ($conexion->connect_error) {
    die("ERROR DE CONEXIÓN A LA BASE DE DATOS: " . $conexion->connect_error);
}
?>
<?php

$conexion = new mysqli('127.0.0.1', 'root', 'root', 'bd_almacen16');
$error = $conexion->connect_errno;
if ($error != null) {
    echo "Error $error conectando a la base de datos: $conexion->connect_errno";
}


<?php

include_once '../Dao/Operaciones.php';
include_once '../Modelo/Inventario.php';
include_once '../Modelo/EstanteriaCajas.php';

session_start();
$_inventario = Operaciones::montarInventario();

$_SESSION['inventario'] = $_inventario;
header("Location:../vista/VerInventario.php");



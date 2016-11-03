<?php

include_once '../Dao/Operaciones.php';

$_tipo = $_REQUEST['TIPODEVOLVER'];
$_codcaja = $_REQUEST['COD_CAJA_DEVOLVER'];
$_estNueva = $_REQUEST['CODIGO'];
$_lejaNueva = $_REQUEST['LEJA'];

session_start();
$_devCaja = Operaciones::cargarCajaDevolver($_tipo, $_codcaja, $_estNueva, $_lejaNueva);

$_SESSION['caja_a_devolver'] = $_devCaja;
header("Location:../Vista/ConfirmacionDevolverCaja.php");



<?php
include_once '../Dao/Operaciones.php';

$_tipo = $_REQUEST['TIPOSACAR'];
$_codcaja = $_REQUEST['COD_CAJA_SACAR'];

session_start();
$_sacaCaja = Operaciones::cargarCajaSacar($_tipo, $_codcaja);

$_SESSION['caja_a_sacar'] = $_sacaCaja;
header("Location:../Vista/ConfirmacionSacarCaja.php");

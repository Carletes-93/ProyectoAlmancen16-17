<?php

include_once '../Dao/Operaciones.php';

$_opcion=$_REQUEST['opcion'];

switch ($_opcion) {
    case 'INVENTARIO':
        header('Location:./controladorInventario.php');
        break;
    case 'SACAR':
        header('Location:../Vista/SacarCaja.php');
        break;
    case 'DEVOLVER':
        header('Location:../Vista/DevolverCaja.php');
        break;
    default:
        break;
}

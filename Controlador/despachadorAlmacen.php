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
    default:
        break;
}

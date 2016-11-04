<?php

include_once '../Dao/Operaciones.php';
include_once '../Modelo/CajaBackup.php';

$_opcion=$_REQUEST['conf'];

switch($_opcion){
    case 'Si':
        session_start();
        $cCajaADevolver=$_SESSION['caja_a_devolver'];
        Operaciones::devolverCaja($cCajaADevolver);
        break;
    case 'No':
        header("Location:../Vista/DevolverCaja.php");
        break;
}
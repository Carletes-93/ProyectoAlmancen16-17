<?php
include_once '../Dao/Operaciones.php';
include_once '../Modelo/CajaSorpresa.php';
include_once '../Modelo/CajaSeguridad.php';
include_once '../Modelo/CajaNegra.php';

$_opcion=$_REQUEST['conf'];

switch($_opcion){
    case 'Si':
        session_start();
        $_CajaASacar=$_SESSION['caja_a_sacar'];
        Operaciones::borrarCaja($_CajaASacar);
        break;
    case 'No':
        header("Location:../index.php");
        break;
}

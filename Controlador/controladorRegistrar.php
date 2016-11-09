<?php

include_once '../Modelo/Usuario.php';
include_once '../Dao/Operaciones.php';

$_usuario = $_REQUEST['NOMBRE'];
$_pass = $_REQUEST['PASS'];
$_confpass = $_REQUEST['CONFPASS'];

if ($_pass === $_confpass) {
    $_user = new Usuario($_usuario, $_pass);

    if (Operaciones::registrarUsuario($_user) == true) {
        header('Location: ../index.php');
    } else {
        header('Location: ../Vista/Error.php');
    }
}
else{
    header('Location: ../Vista/Error.php');
}



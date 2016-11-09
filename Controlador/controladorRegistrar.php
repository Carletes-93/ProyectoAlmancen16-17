<?php

include_once '../Modelo/Usuario.php';
include_once '../Dao/Operaciones.php';

$_usuario = $_REQUEST['NOMBRE'];
$_pass = $_REQUEST['PASS'];
$_confpass = $_REQUEST['CONFPASS'];

if ($_pass === $_confpass) {
    include_once '../Dao/Encriptar.php';
    
    $_passCrypt = password_hash($_pass, PASSWORD_BCRYPT, $options);
    
    $_user = new Usuario($_usuario, $_passCrypt);

    if (Operaciones::registrarUsuario($_user) == true) {
        header('Location: ../index.php');
    } else {
        header('Location: ../Vista/Error.php');
    }
}
else{
    header('Location: ../Vista/Error.php');
}



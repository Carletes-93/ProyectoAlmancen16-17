<?php

include_once '../Modelo/Usuario.php';
include_once '../Dao/Operaciones.php';

$_usuario = $_REQUEST['NOMBRE'];
$_pass = $_REQUEST['PASS'];

$_user = new Usuario($_usuario, $_pass);

if(Operaciones::validarUsuario($_user) == true){
    session_start();
    $_SESSION['usuario'] = $_user;
    header('Location: ../index.php');
}
else{
    header('Location: ../Vista/Error.php');
}


<?php

include_once '../Modelo/Usuario.php';
include_once '../Dao/Operaciones.php';
include_once '../Dao/Encriptar.php';

$_usuario = $_REQUEST['NOMBRE'];
$_pass = $_REQUEST['PASS'];

$_passCrypt = password_hash($_pass, PASSWORD_BCRYPT, $options);

$_user = new Usuario($_usuario, $_passCrypt);

if (Operaciones::validarUsuario($_user) == true) {
    session_start();
    $_SESSION['usuario'] = $_user;
    header('Location: ../index.php');
} else {
    $_SESSION['error'] = 9;
    header('Location: ../Vista/Error.php');
}


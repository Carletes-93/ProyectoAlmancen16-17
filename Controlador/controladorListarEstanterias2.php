<?php

include_once '../Dao/Operaciones.php';

$aEstanterias=Operaciones::listarEstanterias();

session_start();
$_SESSION['listarEstanterias']=$aEstanterias;
header("Location:../Vista/listarEstanterias2.php");
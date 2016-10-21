<?php

include_once '../Modelo/Estanteria.php';
include_once '../Dao/Operaciones.php';

$lejas=$_REQUEST['LEJAS'];
$material=$_REQUEST['MATERIAL'];
$pasillo=$_REQUEST['PASILLO'];
$numero=$_REQUEST['NUMERO'];


$objEstanteria=new Estanteria($material, $lejas, $pasillo, $numero);
$objEstanteria->setCodigo_estanteria(Operaciones::generarCodigo(10));
Operaciones::addEstanteria($objEstanteria);
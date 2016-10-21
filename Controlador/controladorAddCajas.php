<?php

include_once '../Modelo/CajaFuerte.php';
include_once '../Modelo/CajaSorpresa.php';
include_once '../Modelo/CajaNegra.php';
include_once '../Dao/Operaciones.php';

$_alto = $_REQUEST['ALTO'];
$_ancho = $_REQUEST['ANCHO'];
$_prof = $_REQUEST['PROFUNDIDAD'];
$_cod_estanteria = $_REQUEST['CODIGO'];
$_leja = $_REQUEST['LEJA'];
$_color = $_REQUEST['COLOR'];
$_tipo = $_REQUEST['TIPO'];
$_contenido = $_REQUEST['CONTENIDO'];

switch ($_tipo) {
    case 'SORPRESA':
        $ObjCajaSorpresa = new CajaSorpresa($_alto, $_ancho, $_prof, $_color, $_contenido);
        $ObjCajaSorpresa->setEstanteria($_cod_estanteria);
        $ObjCajaSorpresa->setLeja($_leja);
        $ObjCajaSorpresa->setCodigo(Operaciones::generarCodigo(10));
        Operaciones::addCajaSorpresa($ObjCajaSorpresa);
        break;
    case 'FUERTE':
        $ObjCajaFuerte = new CajaFuerte($_alto, $_ancho, $_prof, $_color, $_contenido);
        $ObjCajaFuerte->setEstanteria($_cod_estanteria);
        $ObjCajaFuerte->setLeja($_leja);
        $ObjCajaFuerte->setCodigo(Operaciones::generarCodigo(10));
        Operaciones::addCajaFuerte($ObjCajaFuerte);
        break;
    case 'NEGRA':
        $ObjCajaNegra = new CajaNegra($_alto, $_ancho, $_prof, $_color, $_contenido);
        $ObjCajaNegra->setEstanteria($_cod_estanteria);
        $ObjCajaNegra->setLeja($_leja);
        $ObjCajaNegra->setCodigo(Operaciones::generarCodigo(10));
        Operaciones::addCajaNegra($ObjCajaNegra);
        break;

    default:
        break;
}

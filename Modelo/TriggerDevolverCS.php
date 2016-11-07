<?php
//include_once '../Dao/Conexion.php';

global $conexion;

$sentencia1 = "DROP TRIGGER IF EXISTS `caja_sorpresa_backup_after_delete`";

$sentencia2 = "CREATE TRIGGER `caja_sorpresa_after_delete`
                AFTER DELETE ON `caja_sorpresa_backup` FOR EACH ROW 
                BEGIN
                    INSERT INTO caja_sorpresa VALUES(NULL, ".$_caja->getCodigo().", ".$_caja->getAlto().", ".$_caja->getAncho().", ".$_caja->getProfundidad().", ".$_caja->getContenido().", ".$_caja->getColor().", ".$_caja->getFecha_alta().");
                    INSERT INTO ocupacion VALUES(NULL, ".$_caja->getNueva_estanteria().", ".$_caja->getNueva_leja().", ".$_caja->getId().", 'sorpresa');
                    UPDATE estanteria SET OCUPADAS = OCUPADAS + 1 WHERE ID_ESTANTERIA = ".$_caja->getNueva_estanteria().";
                END";

$resul1 = $conexion->query($sentencia1);
$resul2 = $conexion->query($sentencia2);
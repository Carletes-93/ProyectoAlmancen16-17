<?php

$sentencia1f = "DROP TRIGGER IF EXISTS `caja_fuerte_backup_after_delete`";

$sentencia2f = "CREATE TRIGGER `caja_fuerte_backup_after_delete`
                AFTER DELETE ON `caja_fuerte_backup` FOR EACH ROW 
                BEGIN
                    INSERT INTO caja_fuerte VALUES(".$_caja->getId().", '".$_caja->getCodigo()."', ".$_caja->getAlto().", ".$_caja->getAncho().", ".$_caja->getProfundidad().", '".$_caja->getContenido()."', '".$_caja->getColor()."', '".$_caja->getFecha_alta()."');
                    INSERT INTO ocupacion VALUES(NULL, ".$_caja->getNueva_estanteria().", ".$_caja->getNueva_leja().", ".$_caja->getId().", 'fuerte');
                    UPDATE estanteria SET OCUPADAS = OCUPADAS + 1 WHERE ID_ESTANTERIA = ".$_caja->getNueva_estanteria().";
                END";

$resul1 = $conexion->query($sentencia1f);
$resul2 = $conexion->query($sentencia2f);

echo ($resul1);
echo ("  --  ");
echo ($resul2);


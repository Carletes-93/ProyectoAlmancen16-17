<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="Vista/JS-CSS/css.css"/>
    </head>
    <body>
        <?php
        include_once '../Modelo/CajaBackup.php';

        session_start();
        $vCaja_a_Sacar = $_SESSION['caja_a_devolver'];
        ?>

        <div class="listar">
            <h2>¿Quieres devolver la siguiente caja en la ubicacion indicada?</h2>

            <table class="tabla1" border="3px black solid">
                <tr>
                    <td class="tdh">
                        Codigo
                    </td>
                    <td class="tdh">
                        Alto
                    </td>
                    <td class="tdh">
                        Ancho
                    </td>
                    <td class="tdh">
                        Profundidad
                    </td>
                    <td class="tdh">
                        Variable
                    </td>
                    <td class="tdh">
                        Color
                    </td>
                    <td class="tdh">
                        Fecha Alta
                    </td>
                    <td class="tdh">
                        Fecha Borrado
                    </td>
                    <td class="tdh">
                        Estanteria Antigua
                    </td>
                    <td class="tdh">
                        Leja Antigua
                    </td>
                    <td class="tdh">
                        Estanteria Nueva
                    </td>
                    <td class="tdh">
                        Leja Nueva
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo $vCaja_a_Sacar->getCodigo(); ?>
                    </td>
                    <td>
                        <?php echo $vCaja_a_Sacar->getAlto(); ?>
                    </td>
                    <td>
                        <?php echo $vCaja_a_Sacar->getAncho(); ?>
                    </td>
                    <td>
                        <?php echo $vCaja_a_Sacar->getProfundidad(); ?>
                    </td>
                    <td>
                        <?php echo $vCaja_a_Sacar->getContenido(); ?>
                    </td>
                    <td style="background-color: <?php echo $vCaja_a_Sacar->getColor(); ?>;">
                        
                    </td>
                    <td>
                        <?php echo $vCaja_a_Sacar->getFecha_alta(); ?>
                    </td>
                    <td>
                        <?php echo $vCaja_a_Sacar->getFecha_borrado(); ?>
                    </td>
                    <td>
                        <?php echo $vCaja_a_Sacar->getEstanteria(); ?>
                    </td>
                    <td>
                        <?php echo $vCaja_a_Sacar->getLeja(); ?>
                    </td>
                    <td>
                        <?php echo $vCaja_a_Sacar->getNueva_estanteria(); ?>
                    </td>
                    <td>
                        <?php echo $vCaja_a_Sacar->getNueva_leja(); ?>
                    </td>
                </tr>
            </table>
            <br>
            <form action="../controlador/controladorConfirmarDevolucion.php">
                <input type="submit" class="btn2" id="si" name="conf" value="Si">
                <input type="submit" class="btn2" id="no" name="conf" value="No">
            </form>
        </div>
    </body>
</html>
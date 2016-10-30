<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="Vista/JS-CSS/css.css"/>
    </head>
    <body>
        <?php
        include_once '../Modelo/CajaSorpresa.php';
        include_once '../Modelo/CajaFuerte.php';
        include_once '../Modelo/CajaNegra.php';

        session_start();
        $_Caja_a_Sacar = $_SESSION['caja_a_sacar'];
        ?>

        <div class="listar">
            <h2>¿Quieres eliminar la siguiente caja?</h2>

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
                        <?php
                        if ($_Caja_a_Sacar instanceof CajaSorpresa) {
                            echo "Contenido";
                        }
                        if ($_Caja_a_Sacar instanceof CajaFuerte) {
                            echo "Clave";
                        }
                        if ($_Caja_a_Sacar instanceof CajaNegra) {
                            echo "Placa";
                        }
                        ?>
                    </td>
                    <td class="tdh">
                        Color
                    </td>
                    <td class="tdh">
                        Fecha Alta
                    </td>
                    <td class="tdh">
                        Estanteria
                    </td>
                    <td class="tdh">
                        Leja
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo $_Caja_a_Sacar->getCodigo(); ?>
                    </td>
                    <td>
                        <?php echo $_Caja_a_Sacar->getAltura(); ?>
                    </td>
                    <td>
                        <?php echo $_Caja_a_Sacar->getAnchura(); ?>
                    </td>
                    <td>
                        <?php echo $_Caja_a_Sacar->getProfundidad(); ?>
                    </td>
                    <td>
                        <?php
                        if ($_Caja_a_Sacar instanceof CajaSorpresa) {
                            echo $_Caja_a_Sacar->getSorpresa();
                        }
                        if ($_Caja_a_Sacar instanceof CajaFuerte) {
                            echo $_Caja_a_Sacar->getClave();
                        }
                        if ($_Caja_a_Sacar instanceof CajaNegra) {
                            echo $_Caja_a_Sacar->getPlaca();
                        }
                        ?>
                    </td>
                    <td style="background-color: <?php echo $_Caja_a_Sacar->getColor(); ?>;">

                    </td>
                    <td>
                        <?php echo $_Caja_a_Sacar->getFecha_alta(); ?>
                    </td>
                    <td>
                        <?php echo $_Caja_a_Sacar->getEstanteria(); ?>
                    </td>
                    <td>
                        <?php echo $_Caja_a_Sacar->getLeja(); ?>
                    </td>
                </tr>
            </table>
            <br>
            <form action="../Controlador/controladorConfirmacionSacar.php">
                <input type="submit" class="btn2" id="si" name="conf" value="Si">
                <input type="submit" class="btn2" id="no" name="conf" value="No">
            </form>
        </div>
    </body>
</html>
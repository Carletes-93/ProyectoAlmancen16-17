<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="JS-CSS/css.css"/>
        <link rel="icon" type="image/png" href="./Imagenes/favicon.png" />
        <title>Inventario</title>
    </head>
    <body>
        <?php
        include_once '../Modelo/Inventario.php';
        include_once '../Modelo/EstanteriaCajas.php';
        session_start();
        $vInventario = $_SESSION['inventario'];
        $arrayEstanteriaCajas = $vInventario->getEstanteriacajas();
        ?>
        <div id="listarCajas"> 
            <h2>Inventario del Almacén -- Fecha: <?php echo $vInventario->getFecha(); ?></h2>
            <?php
            foreach ($arrayEstanteriaCajas as $_estanteria) {
                ?>
                <table class="tablaListCajas" border="1px solid">
                    <tr>
                        <th class="titulotabla"colspan=9">Estantería: <?php echo $_estanteria->getCodigo_estanteria(); ?> -- Pasillo: <?php echo $_estanteria->getPasillo(); ?> -- Número: <?php echo $_estanteria->getNumero(); ?></th>
                    </tr>
                    <tr>
                        <td class="tdh">
                            Leja
                        </td>
                        <td class="tdh">
                            Código
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
                            Tipo
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
                    </tr>
                    <?php
                    $grupocajas = $_estanteria->getCajas();
                    foreach ($grupocajas as $_cajas) {
                        ?>
                        <tr class="conten">
                            <td>
                                <?php echo $_cajas->getLeja(); ?>
                            </td>
                            <td>
                                <?php echo $_cajas->getCodigo(); ?>
                            </td>
                            <td>
                                <?php echo $_cajas->getAltura(); ?>
                            </td>
                            <td>
                                <?php echo $_cajas->getAnchura(); ?>
                            </td>
                            <td>
                                <?php echo $_cajas->getProfundidad(); ?>
                            </td>
                            <td>
                                <?php
                                if ($_cajas instanceof CajaSorpresa) {
                                    echo "Sorpresa";
                                }
                                if ($_cajas instanceof CajaFuerte) {
                                    echo "Fuerte";
                                }
                                if ($_cajas instanceof CajaNegra) {
                                    echo "Negra";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($_cajas instanceof CajaSorpresa) {
                                    echo $_cajas->getSorpresa();
                                }
                                if ($_cajas instanceof CajaFuerte) {
                                    echo $_cajas->getClave();
                                }
                                if ($_cajas instanceof CajaNegra) {
                                    echo $_cajas->getPlaca();
                                }
                                ?>
                            </td>
                            <td style="background-color: <?php echo $_cajas->getColor(); ?>">

                            </td>
                            <td>
                                <?php echo $_cajas->getFecha_alta(); ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <?php
            }
            ?>
            <a href="../index.php"><button id="volverinventario" class="btn2">Volver</button></a>
        </div>
    </body>
</html>

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
        <div class="listar"> 
            <h1>Inventario del Almacen</h1>
            <h3>Fecha: <?php echo $vInventario->getFecha(); ?></h3>
            <?php
            foreach ($arrayEstanteriaCajas as $_estanteria) {
                ?>
                <table class="tabla1" border="1px" width="800px">
                    <tr>
                        <th colspan=8">Estanteria: <?php echo $_estanteria->getCodigo_estanteria(); ?> Pasillo: <?php echo $_estanteria->getPasillo(); ?> Numero: <?php echo $_estanteria->getNumero(); ?></th>
                    </tr>
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
                        <td>
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
                        <tr>
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
            <a href="../index.php"><button class="btn2">Volver</button></a>
        </div>
    </body>
</html>

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
        <script type="text/javascript" src="JS-CSS/js.js"></script>
        <title></title>
    </head>
    <body>
        <?php
        include_once '../Modelo/Estanteria.php';
        session_start();
        $vListado = $_SESSION['listarEstanterias'];
        ?>
        <div class="listar">
            <table class="tabla1" border="1px solid">
                <tr>
                    <th colspan="6" align="center">Listado de las estanterias del Almacen</th>
                </tr>
                <tr>
                    <td class="tdh">Codigo Estanteria</td>
                    <td class="tdh">Nº Lejas</td>
                    <td class="tdh">Material</td>
                    <td class="tdh">Pasillo</td>
                    <td class="tdh">Numero</td>
                    <td class="tdh">Lejas Ocupadas</td>
                </tr>
                <?php
                foreach ($vListado as $estanteria) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $estanteria->getCodigo_estanteria(); ?>
                        </td>
                        <td>
                            <?php echo $estanteria->getLejas(); ?>
                        </td>
                        <td>
                            <?php echo $estanteria->getMaterial(); ?>
                        </td>
                        <td>
                            <?php echo $estanteria->getPasillo(); ?>
                        </td>
                        <td>
                            <?php echo $estanteria->getNumero(); ?>
                        </td>
                        <td>
                            <?php echo $estanteria->getOcupadas(); ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <a href="./GestionEstanterias.php"><button>Volver</button></a>
        </div>
    </body>
</html>

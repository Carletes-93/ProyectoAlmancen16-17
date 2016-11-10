<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once '../Dao/Operaciones.php';
include_once '../Modelo/Estanteria.php';

$vEstLibres = Operaciones::cargarEstanteriasLibres();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./JS-CSS/css.css"/>
        <script type="text/javascript" src="JS-CSS/js.js"></script>
        <title>Devolver caja</title>
    </head>
    <body>
        <div id="divdevolvercaja">
            <h2>Devolver Cajas</h2>
            <form action="../Controlador/controladorCargarCajaDevolver.php">
                <table id="devolvercaja">
                    <tr>
                        <td>
                            Tipo
                        </td>
                        <td>
                            <select id="tiposacar" name="TIPODEVOLVER">
                                <option value="" selected="select">--</option>
                                <option value="sorpresa">Sorpresa</option>
                                <option value="fuerte">Fuerte</option>
                                <option value="negra">Negra</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Código
                        </td>
                        <td>
                            <input type="text" name="COD_CAJA_DEVOLVER" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Estantería Nueva
                        </td>
                        <td>
                            <select id="estanteria" name="CODIGO" onChange="lejasLibres(this.value)">
                                <option value="">--</option>
                                //<?php
                                foreach ($vEstLibres as $value) {
                                    ?>
                                    <option value="<?php echo $value->getId(); ?>"><?php echo "Codigo:" . $value->getCodigo_estanteria() . " - Pasillo:" . $value->getPasillo() . " - Numero:" . $value->getNumero(); ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Leja Nueva
                        </td>
                        <td>
                            <select id="lejalibre" name="LEJA">

                            </select>
                        </td>
                    </tr>
                </table>
                <input type="submit" class="btn2" value="Devolver">
            </form>
            <hr>
            <a href="../index.php"><button class="btn2">Volver</button></a>
        </div>
    </body>
</html>

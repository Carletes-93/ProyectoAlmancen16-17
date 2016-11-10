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
        <link rel="stylesheet" type="text/css" href="JS-CSS/css.css"/>
        <script type="text/javascript" src="JS-CSS/js.js"></script>
        <title>Alta de Cajas</title>
    </head>
    <body>
        <div class="contenedor">
            <h2>Alta de cajas</h2>
            <form action="../Controlador/controladorAddCajas.php">
                <table id="addCajas">
                    <tr>
                        <td>Alto:</td> 
                        <td><input type="number" id="alto" name="ALTO" min="1" required></td>
                    </tr>
                    <tr>
                        <td>Ancho:</td>
                        <td><input type="number" id="ancho" name="ANCHO" min="1" required></td>
                    </tr>
                    <tr>
                        <td>Prof.:</td>
                        <td><input type="number" id="profundidad" name="PROFUNDIDAD" min="1" required></td>
                    </tr>
                    <tr>
                        <td>Estantería:</td>
                        <td>
                            <select id="estanteria" name="CODIGO" onChange="lejasLibres(this.value)">
                                <option value="">--</option>
                                //<?php
                                foreach ($vEstLibres as $value) {
                                    ?>
                                    <option value="<?php echo $value->getId(); ?>"><?php echo "Código:" . $value->getCodigo_estanteria() . " - Pasillo:" . $value->getPasillo() . " - Número:" . $value->getNumero(); ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Leja:</td>
                        <td>
                            <select id="lejalibre" name="LEJA">

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Color:</td>
                        <td><input type="color" id="color" name="COLOR" required></td>
                    </tr>
                    <tr>
                        <td>Tipo:</td>
                        <td><select id="tipo" name="TIPO" onchange="tipocaja()">
                                <option value="SORPRESA" selected="select">Sorpresa</option>
                                <option value="FUERTE">Fuerte</option>
                                <option value="NEGRA">Negra</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td id="tipocaja">Contenido:</td>
                        <td><input type="text" id="cambiatipo" name="CONTENIDO" required></td>
                    </tr>
                </table>
                <input type="submit" class="btn2" value="Dar Alta">
            </form>
            <hr>
            <a href="./AltaCajas.php"><button>Volver</button></a>
        </div>
    </body>
</html>

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
        <title></title>
    </head>
    <body>
        <form action="../Controlador/controladorAddCajas.php">
            <table>
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
                    <td>Estanteria:</td>
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
                    <td>Leja:</td>
                    <td>
                        <select id="lejalibre" name="LEJA">

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Color:</td>
                    <td><input type="text" id="color" name="COLOR" required></td>
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
                <tr>
                    <td><input type="submit" class="btn2" value="Dar Alta"</td>
                    <td>

                    </td>
                </tr>
            </table>
    </body>
</html>

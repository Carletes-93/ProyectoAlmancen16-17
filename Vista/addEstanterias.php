<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once '../Modelo/Estanteria.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="JS-CSS/css.css"/>
        <link rel="icon" type="image/png" href="./Imagenes/favicon.png" />
        <script type="text/javascript" src="JS-CSS/js.js"></script>
        <title>Añadir Estanterías</title>
    </head>
    <body>
        <div class="contenedor">
            <h2>Añadir Estantería</h2>
            <form action="../Controlador/controladorAddEstanteria.php">
                <table id="addEstanteria">
                    <tr>
                        <td>NºLejas:</td>
                        <td><input type="number" id="lejas" name="LEJAS" min="1" max="15" required></td>
                    </tr>
                    <tr>
                        <td>Material:</td>
                        <td> <select id="material" name="MATERIAL" required>
                                <option value="Metal">Metal</option>
                                <option value="Madera">Madera</option>
                                <option value="Plastico">Plastico</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Pasillo:</td>
                        <td><input type="text" id="pasillo" name="PASILLO" required></td>
                    </tr>
                    <tr>
                        <td>Número:
                        <td><input type="text" id="numero" name="NUMERO" required></td>
                    </tr>
                </table>
                <input type="submit" class="btn2" value="Añadir">
            </form>
            <hr>
            <a href="./GestionEstanterias.php"><button class="btn2">Volver</button></a>
        </div>
    </body>
</html>

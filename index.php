<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
//include_once './Dao/Operaciones.php';
//include_once './Modelo/Estanteria.php';
////$vLista = Operaciones::cargarEstanteriasLibres();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="Vista/JS-CSS/css.css"/>
        <script type="text/javascript" src="Vista/JS-CSS/js.js"></script>
    </head>
    <body>
        <table class="tabs" data-min="0" data-max="2">
            <tr>
                <th class="tabck" id="tabck-0" onclick="activarTab(this)">Estanterías</th>
                <th class="tabcks">&nbsp;</th>
                <th class="tabck" id="tabck-1" onclick="activarTab(this)">Cajas</th>
                <th class="tabcks">&nbsp;</th>
                <th class="tabck" id="tabck-2" onclick="activarTab(this)">Almacén</th>
            </tr>
            <tr class="filadiv">
                <td colspan="6" id="tab-0">
                    <div class="tabdiv" id="tabdiv-0">
                        <form action="Vista/GestionEstanterias.php">
                            <h2>Gestionar Estanterias</h2>
                            <input type="submit" class="btn2" value="Ir">
                        </form>
                    </div>
                    <div class="tabdiv" id="tabdiv-1">
                        <form action="Vista/AltaCajas.php">
                            <h2>Alta de Cajas</h2>
                            <input type="submit" class="btn2" value="Ir">
                        </form>
                    </div>
                    <div class="tabdiv" id="tabdiv-2">
                        <form action="Controlador/despachadorAlmacen.php">
                            <p><h3><input type="radio" name="opcion" value="INVENTARIO" required>Inventario</h3></p>
                            <p><h3><input type="radio" name="opcion" value="SACAR" required>Sacar Caja</h3></p>
                            <p><h3><input type="radio" name="opcion" value="DEVOLVER" required>Devolver Caja</h3></p>
                            <input type="submit" class="btn2" value="Ir">
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>


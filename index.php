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
                <th class="tabck" id="tabck-1" onclick="activarTab(this)">Segunda</th>
                <th class="tabcks">&nbsp;</th>
                <th class="tabck" id="tabck-2" onclick="activarTab(this)">Tercera</th>
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
                        <p>id=tabdiv-2</p>...
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>


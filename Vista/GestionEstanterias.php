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
        <title>Gestion Estanterías</title>
    </head>
    <body>
        <div class="contenedor">
            <h1>Gestión Estanterías</h1>
            <table id="GestEstanterias">
                <tr>
                    <td>
                        Añadir Estantería
                    </td>
                    <td>
                        <a href="./addEstanterias.php"><button class="btn2">Ir</button></a> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Listar Estanterías
                    </td>
                    <td>
                        <a href="../Controlador/controladorListarEstanterias.php"><button class="btn2">Ir</button> </a>
                    </td>
                </tr>
            </table>
            <a href="../index.php"><button class="btn2">Volver</button></a> 
        </div>
    </body>
</html>

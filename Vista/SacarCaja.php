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
        <title>Sacar caja</title>
    </head>
    <body>
        <div id="divsacacaja">
            <h2>Sacar Cajas</h2>
            <form action="../Controlador/controladorCargarCajaSacar.php">
                <table id="sacaCaja">
                    <tr>
                        <td>
                            Tipo
                        </td>
                        <td>
                            Código
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select id="tiposacar" name="TIPOSACAR">
                                <option value="" selected="select">--</option>
                                <option value="sorpresa">Sorpresa</option>
                                <option value="fuerte">Fuerte</option>
                                <option value="negra">Negra</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="COD_CAJA_SACAR" required>
                        </td>
                    </tr>
                </table>
                <input type="submit" class="btn2" value="Sacar">
            </form>
            <hr>
            <a href="../index.php"><button class="btn2">Volver</button></a>
        </div>
    </body>
</html>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./JS-CSS/css.css"/>
        <link rel="icon" type="image/png" href="./Imagenes/favicon.png" />
        <title>Registrar Usuario</title>
    </head>
    <body>
        <div id="registrar">
            <h1>Registrar Usuario</h1>
            <form action="../Controlador/controladorRegistrar.php">
                <table id="registro">
                    <tr>
                        <td>
                            Usuario:
                        </td>
                        <td>
                            <input type="text" name="NOMBRE" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Contraseña:
                        </td>
                        <td>
                            <input type="password" id="pass1" name="PASS" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Confirmar contraseña:
                        </td>
                        <td>
                            <input type="password" id="pass2" name="CONFPASS" required>
                        </td>
                    </tr>
                </table>
                <input type="submit" class="btn" name="registrar" value="Registrar">
            </form>
        </div>
    </body>
</html>

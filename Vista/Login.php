<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="logear">
            <h1>Iniciar Sesion</h1>
            <form action="../controlador/controladorLogin.php">
                <table>
                    <tr>
                        <td>
                            Usuario:
                        </td>
                        <td>
                            <input type="text" name="nombre" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Contraseña:
                        </td>
                        <td>
                            <input type="password" name="pass" required>
                        </td>
                    </tr>
                </table>
                <input type="submit" class="btn" name="login" value="Login">
            </form>
            <a href="registrarUsuario.php"><button class="btn">Registrar Usuario</button></a>
        </div>
    </body>
</html>

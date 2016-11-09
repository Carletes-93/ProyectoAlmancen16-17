<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Iniciar sesion</title>
    </head>
    <body>
        <div id="logear">
            <h1>Iniciar Sesion</h1>
            <form action="../Controlador/controladorLogin.php">
                <table>
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
                            <input type="password" name="PASS" required>
                        </td>
                    </tr>
                </table>
                <input type="submit" class="btn" name="LOGIN" value="Login">
            </form>
            <a href="RegistrarUsuario.php"><button class="btn">Registrar Usuario</button></a>
        </div>
    </body>
</html>

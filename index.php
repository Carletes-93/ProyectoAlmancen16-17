<!DOCTYPE html>

<?php
include_once './Modelo/Usuario.php';
session_start();
if (!$_SESSION['usuario']) {
    header("Location: controlador/controladorUsuario.php");
} else {
    $user = $_SESSION['usuario'];
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <link rel="stylesheet" type="text/css" href="Vista/JS-CSS/css.css"/>
        <link rel="icon" type="image/png" href="./Imagenes/favicon.png" />
        <script type="text/javascript" src="Vista/JS-CSS/js.js"></script>
    </head>
    <body>
        <div id="cabeceralogin">
            <form id="formlogin" action="Controlador/controladorDesconexion.php">
                <p>Usuario conectado: <b><?php echo $user->getNombre() ?></b> <input type="submit" class="btn2" name="Desconexion" id="desconectar" value="Desconectar"></p>
            </form>
        </div>
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
                            <p><h3><input type="radio" name="opcion" value="LISTESTANTERIAS" required>Listar Estanterías</h3></p>
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


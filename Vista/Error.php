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
        <link rel="icon" type="image/png" href="./Imagenes/favicon.png" />
        <title>Error</title>
        <?php
        session_start();
        $_error = $_SESSION['error'];
        ?>
    </head>
    <body>
        <div id="error">
            <h2>Error</h2>
            <h4>Codigo de error: <?php echo ($_error) ?></h4>
            <h5>Mensaje:</h5>
            <p>
                <?php
                    switch($_error){
                        case 1:
                            echo "Estantería no añadida";
                            break;
                        case 2:
                            echo "Error al mostrar el listado de estanterías";
                            break;
                        case 3:
                            echo "Caja no añadida";
                            break;
                        case 4:
                            echo "Error al mostrar el inventario";
                            break;
                        case 5:
                            echo "Caja a borrar no encontrada";
                            break;
                        case 6:
                            echo "Caja no borrada";
                            break;
                        case 7:
                            echo "Caja a devolver no encontrada";
                            break;
                        case 8:
                            echo "Caja no devuelta";
                            break;
                        case 9:
                            echo "Error al iniciar la sesión";
                            break;
                        case 10:
                            echo "Usuario no registrado";
                            break;
                    }
                ?>
            </p>
        </div>
    </body>
</html>

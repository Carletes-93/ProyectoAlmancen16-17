<?php
include_once '../Dao/Conexion.php';

//OBTENEMOS LA VARIABLE Origen
$Origen = $_REQUEST['CODIGO'];
/* Se hace la consulta oportuna */
print_r($Origen);
global $conexion;
$sentencia1 = "SELECT NºLEJAS FROM estanteria WHERE ID_ESTANTERIA LIKE $Origen";
$resul = $conexion->query($sentencia1, MYSQLI_STORE_RESULT);
$arraylibres = Array();
$fila = $resul->fetch_array();
for ($index = 1; $index < $fila['NºLEJAS']; $index++) {
    $arraylibres[$index] = true;
}
$sentencia2 = "SELECT LEJA FROM ocupacion WHERE COD_ESTANTERIA LIKE $Origen";
$result = $conexion->query($sentencia2, MYSQLI_STORE_RESULT);
$filaocu = $result->fetch_array();
while ($filaocu) {
    $arraylibres[$filaocu['LEJA']] = false;
    $filaocu = $result->fetch_array();
}
$lejalib = "";

foreach ($arraylibres as $key => $value) {
    if ($value) {
        $lejalib = $lejalib . "<option value='$key'>$key</option>";
    }
}
echo $lejalib;

<?php

/**
 * Description of Operaciones
 *
 * @author Carlos
 */
include_once 'Conexion.php';

class Operaciones {

    public function generarCodigo($longitud) {
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern) - 1;
        for ($i = 0; $i < $longitud; $i++)
            $key .= $pattern{mt_rand(0, $max)};
        return $key;
    }

    public function addEstanteria($_objEstanteria) {
        include_once '../Modelo/Estanteria.php';

        $_lejas = $_objEstanteria->getLejas();
        $_material = $_objEstanteria->getMaterial();
        $_pasillo = $_objEstanteria->getPasillo();
        $_numero = $_objEstanteria->getNumero();
        $_codigo = $_objEstanteria->getCodigo_estanteria();

        global $conexion;

        $sentencia = "INSERT INTO estanteria VALUES (0,'$_codigo', '$_lejas', '$_material', '$_pasillo', '$_numero', 0)";
        $resul = $conexion->query($sentencia);
        if ($resul) {
            echo "Estanteria añadida correctamente.";
            header("Location:../Vista/addEstanterias.php");
        } else {
            echo "Estanteria no añadida";
        }
    }

    public function listarEstanterias() {
        include_once '../Modelo/Estanteria.php';

        $aEstanterias = Array();

        global $conexion;

        $sentencia = "SELECT * FROM estanteria";

        $resul = $conexion->query($sentencia, MYSQLI_STORE_RESULT);

        $fila = $resul->fetch_array();

        while ($fila != null) {
            $ObjEstanteria = new Estanteria($fila['MATERIAL'], $fila['NºLEJAS'], $fila['PASILLO'], $fila['NUMERO']);
            $ObjEstanteria->setId($fila['ID_ESTANTERIA']);
            $ObjEstanteria->setOcupadas($fila['OCUPADAS']);
            $ObjEstanteria->setCodigo_estanteria($fila['CODIGO']);
            array_push($aEstanterias, $ObjEstanteria);
            $fila = $resul->fetch_array();
        }
        return $aEstanterias;
    }

    function cargarEstanteriasLibres() {
        include_once '../Modelo/Estanteria.php';

        $aEstanterias = Array();

        global $conexion;

        $sentencia = "SELECT * FROM estanteria WHERE OCUPADAS<NºLEJAS";

        $resul = $conexion->query($sentencia, MYSQLI_STORE_RESULT);

        $fila = $resul->fetch_array();

        while ($fila != null) {
            $estanteria = new Estanteria($fila['MATERIAL'], $fila['NºLEJAS'], $fila['PASILLO'], $fila['NUMERO']);
            $estanteria->setId($fila['ID_ESTANTERIA']);
            $estanteria->setOcupadas($fila['OCUPADAS']);
            $estanteria->setCodigo_estanteria($fila['CODIGO']);
            array_push($aEstanterias, $estanteria);
            $fila = $resul->fetch_array();
        }
        return $aEstanterias;
    }

    public function addCajaSorpresa($_objcajasorpresa) {
        include_once '../Modelo/CajaSorpresa.php';

        $_codigo = $_objcajasorpresa->getCodigo();
        $_alto = $_objcajasorpresa->getAltura();
        $_ancho = $_objcajasorpresa->getAnchura();
        $_prof = $_objcajasorpresa->getProfundidad();
        $_cod_estanteria = $_objcajasorpresa->getEstanteria();
        $_leja = $_objcajasorpresa->getLeja();
        $_color = $_objcajasorpresa->getColor();
        $_contenido = $_objcajasorpresa->getSorpresa();
        $_fecha = date('Y-m-d');

        global $conexion;

        $conexion->autocommit(FALSE);

        $sentencia = "INSERT INTO caja_sorpresa VALUES (NULL, '$_codigo', '$_alto','$_ancho','$_prof', '$_contenido', '$_color', '$_fecha')";

        $resul = $conexion->query($sentencia);

        $id = mysqli_insert_id($conexion);

        $sentencia = "UPDATE estanteria SET OCUPADAS=(OCUPADAS+1) WHERE ID_ESTANTERIA=$_cod_estanteria";

        $resul = $conexion->query($sentencia);

        $sentencia = "INSERT INTO ocupacion VALUES (NULL, $_cod_estanteria, $_leja, $id, 'sorpresa')";

        $resul = $conexion->query($sentencia);

        if ($resul) {
            $conexion->commit();
            echo "Caja Sorpresa insertada correctamente.";
            header("Location:../Vista/addCajas.php");
        } else {
            $conexion->rollback();
            echo "Caja Sorpresa NO insertada";
        }
        exit();
    }

    public function addCajaFuerte($_objcajafuerte) {
        include_once '../Modelo/CajaFuerte.php';

        $_codigo = $_objcajafuerte->getCodigo();
        $_alto = $_objcajafuerte->getAltura();
        $_ancho = $_objcajafuerte->getAnchura();
        $_prof = $_objcajafuerte->getProfundidad();
        $_cod_estanteria = $_objcajafuerte->getEstanteria();
        $_leja = $_objcajafuerte->getLeja();
        $_color = $_objcajafuerte->getColor();
        $_contenido = $_objcajafuerte->getClave();
        $_fecha = date('Y-m-d');

        global $conexion;

        $conexion->autocommit(FALSE);

        $sentencia = "INSERT INTO caja_fuerte VALUES (NULL, '$_codigo', '$_alto','$_ancho','$_prof', '$_contenido', '$_color', '$_fecha')";

        $resul = $conexion->query($sentencia);

        $id = mysqli_insert_id($conexion);

        $sentencia = "UPDATE estanteria SET OCUPADAS=(OCUPADAS+1) WHERE ID_ESTANTERIA=$_cod_estanteria";

        $resul = $conexion->query($sentencia);

        $sentencia = "INSERT INTO ocupacion VALUES (NULL, $_cod_estanteria, $_leja, $id, 'fuerte')";

        $resul = $conexion->query($sentencia);

        if ($resul) {
            $conexion->commit();
            echo "Caja Fuerte insertada correctamente.";
            header("Location:../Vista/addCajas.php");
        } else {
            $conexion->rollback();
            echo "Caja Fuerte NO insertada";
        }
        exit();
    }

    public function addCajaNegra($_objcajanegra) {
        include_once '../Modelo/CajaNegra.php';

        $_codigo = $_objcajanegra->getCodigo();
        $_alto = $_objcajanegra->getAltura();
        $_ancho = $_objcajanegra->getAnchura();
        $_prof = $_objcajanegra->getProfundidad();
        $_cod_estanteria = $_objcajanegra->getEstanteria();
        $_leja = $_objcajanegra->getLeja();
        $_color = $_objcajanegra->getColor();
        $_contenido = $_objcajanegra->getPlaca();
        $_fecha = date('Y-m-d');

        global $conexion;

        $conexion->autocommit(FALSE);

        $sentencia = "INSERT INTO caja_negra VALUES (NULL, '$_codigo', '$_alto','$_ancho','$_prof', '$_contenido', '$_color', '$_fecha')";

        $resul = $conexion->query($sentencia);

        $id = mysqli_insert_id($conexion);

        $sentencia = "UPDATE estanteria SET OCUPADAS=(OCUPADAS+1) WHERE ID_ESTANTERIA=$_cod_estanteria";

        $resul = $conexion->query($sentencia);

        $sentencia = "INSERT INTO ocupacion VALUES (NULL, $_cod_estanteria, $_leja, $id, 'negra')";

        $resul = $conexion->query($sentencia);

        if ($resul) {
            $conexion->commit();
            echo "Caja Negra insertada correctamente.";
            header("Location:../Vista/addCajas.php");
        } else {
            $conexion->rollback();
            echo "Caja Negra NO insertada";
        }
        exit();
    }

    public function montarInventario() {
        include_once '../Modelo/EstanteriaCajas.php';
        include_once '../Modelo/Inventario.php';

        global $conexion;

        $aEstanteriaCajas = Array();

        $sentencia = "SELECT * FROM estanteria";
        $resul = $conexion->query($sentencia, MYSQLI_STORE_RESULT);
        $fila = $resul->fetch_array();
        while ($fila) {
            $_codigoEst = $fila['ID_ESTANTERIA'];
            $aCajas = Array();
            $sentenciaOcu = "SELECT * FROM ocupacion WHERE COD_ESTANTERIA = $_codigoEst";
            $resulOcu = $conexion->query($sentenciaOcu, MYSQLI_STORE_RESULT);
            $filaOcu = $resulOcu->fetch_array();
            while ($filaOcu) {
                $_tipo = $filaOcu['TIPO'];
                $_codCaja = $filaOcu['COD_CAJA'];

                switch ($_tipo) {
                    case 'sorpresa':
                        $sentenciaSor = "SELECT * FROM caja_sorpresa WHERE ID_CAJA_SORPRESA=$_codCaja";
                        $resulSor = $conexion->query($sentenciaSor, MYSQLI_STORE_RESULT);
                        $filaSor = $resulSor->fetch_array();
                        $_cajaSor = new CajaSorpresa($filaSor['ALTO'], $filaSor['ANCHO'], $filaSor['PROFUNDIDAD'], $filaSor['COLOR'], $filaSor['SORPRESA']);
                        $_cajaSor->setId($filaSor['ID_CAJA_SORPRESA']);
                        $_cajaSor->setCodigo($filaSor['CODIGO']);
                        $_cajaSor->setFecha_alta($filaSor['FECHA_ALTA']);
                        $_cajaSor->setLeja($filaOcu['LEJA']);
                        $_cajaSor->setEstanteria($fila['ID_ESTANTERIA']);
                        array_push($aCajas, $_cajaSor);
                        break;
                    case 'fuerte':
                        $sentenciaFu = "SELECT * FROM caja_fuerte WHERE ID_CAJA_FUERTE=$_codCaja";
                        $resulFu = $conexion->query($sentenciaFu, MYSQLI_STORE_RESULT);
                        $filaFu = $resulFu->fetch_array();
                        $_cajaFu = new CajaFuerte($filaFu['ALTO'], $filaFu['ANCHO'], $filaFu['PROFUNDIDAD'], $filaFu['COLOR'], $filaFu['CLAVE']);
                        $_cajaFu->setId($filaFu['ID_CAJA_FUERTE']);
                        $_cajaFu->setCodigo($filaFu['CODIGO']);
                        $_cajaFu->setFecha_alta($filaFu['FECHA_ALTA']);
                        $_cajaFu->setLeja($filaOcu['LEJA']);
                        $_cajaFu->setEstanteria($fila['ID_ESTANTERIA']);
                        array_push($aCajas, $_cajaFu);
                        break;
                    case 'negra':
                        $sentenciaNe = "SELECT * FROM caja_negra WHERE ID_CAJA_NEGRA=$_codCaja";
                        $resulNe = $conexion->query($sentenciaNe, MYSQLI_STORE_RESULT);
                        $filaNe = $resulNe->fetch_array();
                        $_cajaNe = new CajaFuerte($filaNe['ALTO'], $filaNe['ANCHO'], $filaNe['PROFUNDIDAD'], $filaNe['COLOR'], $filaNe['PLACA']);
                        $_cajaNe->setId($filaNe['ID_CAJA_FUERTE']);
                        $_cajaNe->setCodigo($filaNe['CODIGO']);
                        $_cajaNe->setFecha_alta($filaNe['FECHA_ALTA']);
                        $_cajaNe->setLeja($filaOcu['LEJA']);
                        $_cajaNe->setEstanteria($fila['ID_ESTANTERIA']);
                        array_push($aCajas, $_cajaNe);
                        break;
                }
                $filaOcu = $resulOcu->fetch_array();
            }
            $estanteriaCajas = new EstanteriaCajas($fila['NºLEJAS'], $fila['MATERIAL'], $fila['PASILLO'], $fila['NUMERO'], $aCajas);
            $estanteriaCajas->setId($fila['ID_ESTANTERIA']);
            $estanteriaCajas->setCodigo_estanteria($fila['CODIGO']);
            array_push($aEstanteriaCajas, $estanteriaCajas);
            $fila = $resul->fetch_array();
        }
        $_inventario = new Inventario($aEstanteriaCajas);
        return $_inventario;
    }

    public function cargarCajaSacar($_tipo, $_codcaja) {
        include_once '../Modelo/CajaSorpresa.php';
        include_once '../Modelo/CajaFuerte.php';
        include_once '../Modelo/CajaNegra.php';

        global $conexion;

        switch ($_tipo) {
            case 'sorpresa':
                $sentencia = "SELECT * FROM caja_sorpresa WHERE CODIGO like '$_codcaja'";
                $resulSor = $conexion->query($sentencia, MYSQLI_STORE_RESULT);
                $fila = $resulSor->fetch_array();
                while ($fila) {
                    $_idSor = $fila['ID_CAJA_SORPRESA'];
                    $sentenciaOcu = "SELECT * FROM ocupacion WHERE COD_CAJA='$_idSor' AND TIPO LIKE '$_tipo'";
                    $resulOcu = $conexion->query($sentenciaOcu, MYSQLI_STORE_RESULT);
                    $filaOcu = $resulOcu->fetch_array();
                    while ($filaOcu) {
                        $_caja = new CajaSorpresa($fila['ALTO'], $fila['ANCHO'], $fila['PROFUNDIDAD'], $fila['COLOR'], $fila['SORPRESA']);
                        $_caja->setCodigo($fila['CODIGO']);
                        $_caja->setId($fila['ID_CAJA_SORPRESA']);
                        $_caja->setFecha_alta($fila['FECHA_ALTA']);
                        $_caja->setEstanteria($filaOcu['COD_ESTANTERIA']);
                        $_caja->setLeja($filaOcu['LEJA']);
                        $filaOcu = $resulOcu->fetch_array();
                    }
                    $fila = $resulSor->fetch_array();
                }
        }
        switch ($_tipo) {
            case 'fuerte':
                $sentencia = "SELECT * FROM caja_fuerte WHERE CODIGO like '$_codcaja'";
                $resulFu = $conexion->query($sentencia, MYSQLI_STORE_RESULT);
                $fila = $resulFu->fetch_array();
                while ($fila) {
                    $_idFu = $fila['ID_CAJA_FUERTE'];
                    $sentenciaOcu = "SELECT * FROM ocupacion WHERE COD_CAJA='$_idFu' AND TIPO LIKE '$_tipo'";
                    $resulOcu = $conexion->query($sentenciaOcu, MYSQLI_STORE_RESULT);
                    $filaOcu = $resulOcu->fetch_array();
                    while ($filaOcu) {
                        $_caja = new CajaFuerte($fila['ALTO'], $fila['ANCHO'], $fila['PROFUNDIDAD'], $fila['COLOR'], $fila['CLAVE']);
                        $_caja->setCodigo($fila['CODIGO']);
                        $_caja->setId($fila['ID_CAJA_FUERTE']);
                        $_caja->setFecha_alta($fila['FECHA_ALTA']);
                        $_caja->setEstanteria($filaOcu['COD_ESTANTERIA']);
                        $_caja->setLeja($filaOcu['LEJA']);
                        $filaOcu = $resulOcu->fetch_array();
                    }
                    $fila = $resulFu->fetch_array();
                }
        }
        switch ($_tipo) {
            case 'negra':
                $sentencia = "SELECT * FROM caja_negra WHERE CODIGO like '$_codcaja'";
                $resulNe = $conexion->query($sentencia, MYSQLI_STORE_RESULT);
                $fila = $resulNe->fetch_array();
                while ($fila) {
                    $_idNe = $fila['ID_CAJA_NEGRA'];
                    $sentenciaOcu = "SELECT * FROM ocupacion WHERE COD_CAJA='$_idNe' AND TIPO LIKE '$_tipo'";
                    $resulOcu = $conexion->query($sentenciaOcu, MYSQLI_STORE_RESULT);
                    $filaOcu = $resulOcu->fetch_array();
                    while ($filaOcu) {
                        $_caja = new CajaFuerte($fila['ALTO'], $fila['ANCHO'], $fila['PROFUNDIDAD'], $fila['COLOR'], $fila['PLACA']);
                        $_caja->setCodigo($fila['CODIGO']);
                        $_caja->setId($fila['ID_CAJA_NEGRA']);
                        $_caja->setFecha_alta($fila['FECHA_ALTA']);
                        $_caja->setEstanteria($filaOcu['COD_ESTANTERIA']);
                        $_caja->setLeja($filaOcu['LEJA']);
                        $filaOcu = $resulOcu->fetch_array();
                    }

                    $fila = $resulNe->fetch_array();
                }
        }
        return $_caja;
    }

    public function borrarCaja($_caja) {
        $_codcaja = $_caja->getCodigo();
        
        global $conexion;

        if ($_caja instanceof CajaSorpresa) {
            $sentencia = "DELETE FROM caja_sorpresa WHERE CODIGO = $_codcaja";
        }
        if ($_caja instanceof CajaFuerte) {
            $sentencia = "DELETE FROM caja_fuerte WHERE CODIGO = $_codcaja";
        }
        if ($_caja instanceof CajaNegra) {
            $sentencia = "DELETE FROM caja_negra WHERE CODIGO = $_codcaja";
        }

        if ($conexion->query($sentencia)) {
            header('Location: ../index.php');
        }
    }

}

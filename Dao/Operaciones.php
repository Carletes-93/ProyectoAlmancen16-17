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
}

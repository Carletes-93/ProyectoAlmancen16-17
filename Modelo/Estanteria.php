<?php
/**
 * Description of Estanteria
 *
 * @author Carlos
 */
include_once 'EstanteriaLlenaException.php';
include_once 'CajaSorpresa.php';
include_once 'CajaFuerte.php';
include_once 'CajaNegra.php';

class Estanteria {
    private $id;
    private $material;
    private $lejas;
    private $ocupadas;
    private $codigo_estanteria;
    private $pasillo;
    private $numero;
    
    function __construct($material, $lejas, $pasillo, $numero) {
        $this->material=$material;
        $this->lejas = $lejas;
        $this->pasillo=$pasillo;
        $this->numero=$numero;
    }
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getLejas() {
        return $this->lejas;
    }
    
    function getOcupadas() {
        return $this->ocupadas;
    }
    
    function setLejas($lejas) {
        $this->lejas = $lejas;
    }

    function setOcupadas($ocupadas) {
        $this->ocupadas = $ocupadas;
    }

    function getMaterial() {
        return $this->material;
    }

    function getCodigo_estanteria() {
        return $this->codigo_estanteria;
    }

    function getPasillo() {
        return $this->pasillo;
    }

    function getNumero() {
        return $this->numero;
    }

    function setMaterial($material) {
        $this->material = $material;
    }

    function setCodigo_estanteria($codigo_estanteria) {
        $this->codigo_estanteria = $codigo_estanteria;
    }

    function setPasillo($pasillo) {
        $this->pasillo = $pasillo;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

        
    public function __toString() {
        return "Material: " . $this->material . " - Lejas: ".$this->lejas." - Ocupadas ".$this->ocupadas;
    }
}

<?php
/**
 * Description of CajaFuerte
 *
 * @author Carlos
 */
include_once 'Caja.php';

class CajaFuerte extends Caja{
    private $clave;
    
    public function __construct($altura, $anchura, $profundidad, $color, $codigo) {
        parent::__construct($altura, $anchura, $profundidad, $color);
        $this->clave=$codigo;
    }
    
    function getClave() {
        return $this->clave;
    }

    function setClave($codigo) {
        $this->clave = $codigo;
    }

    public function __toString() {
        return parent::__toString()." Codigo: ".$this->codigo;
    }
    
    function calculavolumen() {
        return $this->getAltura()*$this->getAnchura()*$this->getProfundidad();
    }
}

<?php
/**
 * Description of CajaNegra
 *
 * @author Carlos
 */
include_once 'Caja.php';

class CajaNegra extends Caja{
    private $placa;
    
    public function __construct($altura, $anchura, $profundidad, $color, $placa) {
        parent::__construct($altura, $anchura, $profundidad, $color);
        $this->placa=$placa;
    }
    
    function getPlaca() {
        return $this->placa;
    }

    function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function __toString() {
        return parent::__toString()." Placa: ".$this->placa;
    }
    
    function calculavolumen() {
        return $this->getAltura()*$this->getAnchura()*$this->getProfundidad();
    }
}

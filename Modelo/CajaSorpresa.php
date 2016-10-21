<?php
/**
 * Description of CajaSorpresa
 *
 * @author Carlos
 */
include_once 'Caja.php';

class CajaSorpresa extends Caja{
    private $sorpresa;
    
    public function __construct($altura, $anchura, $profundidad, $color, $sorpresa) {
        parent::__construct($altura, $anchura, $profundidad, $color);
        $this->sorpresa=$sorpresa;
    }
    
    function getSorpresa() {
        return $this->sorpresa;
    }

    function setSorpresa($sorpresa) {
        $this->sorpresa = $sorpresa;
    }

    public function __toString() {
        return parent::__toString()." Sorpresa: ".$this->sorpresa;
    }
    
    function calculavolumen() {
        return $this->getAltura()*$this->getAnchura()*$this->getProfundidad();
    }

}

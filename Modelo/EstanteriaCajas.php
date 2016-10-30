<?php

/**
 * Description of EstanteriaCajas
 *
 * @author Carlos
 */
include_once 'Estanteria.php';
include_once 'CajaSorpresa.php';
include_once 'CajaFuerte.php';
include_once 'CajaNegra.php';

class EstanteriaCajas extends Estanteria {

    private $cajas = Array();

    public function __construct($lejas, $material, $pasillo, $numero, $cajas) {
        parent::__construct($lejas, $material, $pasillo, $numero);
        $this->cajas = $cajas;
    }

    function getCajas() {
        return $this->cajas;
    }

    function setCajas($cajas) {
        $this->cajas = $cajas;
    }

}

<?php

/**
 * Description of Inventario
 *
 * @author Carlos
 */
class Inventario {

    private $fecha;
    private $estanteriacajas = Array();

    public function __construct($EstanteriaCajas) {
        $this->fecha = date('Y-m-d');
        $this->estanteriacajas = $EstanteriaCajas;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getEstanteriacajas() {
        return $this->estanteriacajas;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setEstanteriacajas($estanteriacajas) {
        $this->estanteriacajas = $estanteriacajas;
    }

}

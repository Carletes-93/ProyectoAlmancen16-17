<?php
/**
 * Description of Caja
 *
 * @author Carlos
 */
include_once 'DimensionErrorException.php';

abstract class Caja {
    private $id;
    private $altura;
    private $anchura;
    private $profundidad;
    private $color;
    private $codigo;
    private $estanteria;
    private $leja;
    private $fecha_alta;
    
    function __construct($altura, $anchura, $profundidad, $color) {
        $this->setAltura($altura);
        $this->setAnchura($anchura);
        $this->setProfundidad($profundidad);
        $this->color = $color;
    }
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getAltura() {
        return $this->altura;
    }

    function getAnchura() {
        return $this->anchura;
    }

    function getProfundidad() {
        return $this->profundidad;
    }

    function getColor() {
        return $this->color;
    }

    function setAltura($altura) {
        if($altura<0){
            throw new DimensionErrorException("altura", 1, $altura);
        }
        if($altura==0){
            throw new DimensionErrorException("altura", 1, $altura);
        }
        if($altura>50){
            throw new DimensionErrorException("altura", 1, $altura);
        }
        $this->altura = $altura;
    }

    function setAnchura($anchura) {
        if($anchura<0){
            throw new DimensionErrorException("anchura", 2, $anchura);
        }
        if($anchura==0){
            throw new DimensionErrorException("anchura", 2, $anchura);
        }
        if($anchura>50){
            throw new DimensionErrorException("anchura", 2, $anchura);
        }
        $this->anchura = $anchura;
    }

    function setProfundidad($profundidad) {
        if($profundidad<0){
            throw new DimensionErrorException("profundidad", 3, $profundidad);
        }
        if($profundidad==0){
            throw new DimensionErrorException("profundidad", 3, $profundidad);
        }
        if($profundidad>50){
            throw new DimensionErrorException("profundidad", 3, $profundidad);
        }
        $this->profundidad = $profundidad;
    }

    function setColor($color) {
        $this->color = $color;
    }
    
    function getCodigo() {
        return $this->codigo;
    }

    function getEstanteria() {
        return $this->estanteria;
    }

    function getLeja() {
        return $this->leja;
    }

    function getFecha_alta() {
        return $this->fecha_alta;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setEstanteria($estanteria) {
        $this->estanteria = $estanteria;
    }

    function setLeja($leja) {
        $this->leja = $leja;
    }

    function setFecha_alta($fecha_alta) {
        $this->fecha_alta = $fecha_alta;
    }
    
    public function __toString() {
        return "Altura: " . $this->altura . ". Anchura: " . $this->anchura . ". Profundidad: " . $this->profundidad . ". Color: " . $this->color;
    }
    
    abstract function calculavolumen();
}

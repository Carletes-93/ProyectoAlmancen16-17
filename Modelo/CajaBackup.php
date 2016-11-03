<?php
/**
 * Description of CajaBackup
 *
 * @author Carlos
 */
class CajaBackup {
    private $id;
    private $codigo;
    private $alto;
    private $ancho;
    private $profundidad;
    private $contenido;
    private $color;
    private $fecha_alta;
    private $leja;
    private $fecha_borrado;
    private $estanteria;
    private $tipo;
    private $nueva_estanteria;
    private $nueva_leja;

    function __construct($alto, $ancho, $profundidad, $contenido, $color, $fecha_alta, $leja, $fecha_borrado, $estanteria) {
        $this->alto = $alto;
        $this->ancho = $ancho;
        $this->profundidad = $profundidad;
        $this->contenido = $contenido;
        $this->color = $color;
        $this->fecha_alta = $fecha_alta;
        $this->leja = $leja;
        $this->fecha_borrado = $fecha_borrado;
        $this->estanteria = $estanteria;
    }
    
    function getId(){
        return $this->id;
    }
    
    function getCodigo() {
        return $this->codigo;
    }

    function getAlto() {
        return $this->alto;
    }

    function getAncho() {
        return $this->ancho;
    }

    function getProfundidad() {
        return $this->profundidad;
    }

    function getContenido() {
        return $this->contenido;
    }

    function getColor() {
        return $this->color;
    }

    function getFecha_alta() {
        return $this->fecha_alta;
    }

    function getLeja() {
        return $this->leja;
    }

    function getFecha_borrado() {
        return $this->fecha_borrado;
    }

    function getEstanteria() {
        return $this->estanteria;
    }
    
    function setId($id){
        $this->id = $id;
    }
    
    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setAlto($alto) {
        $this->alto = $alto;
    }

    function setAncho($ancho) {
        $this->ancho = $ancho;
    }

    function setProfundidad($profundidad) {
        $this->profundidad = $profundidad;
    }

    function setContenido($contenido) {
        $this->contenido = $contenido;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function setFecha_alta($fecha_alta) {
        $this->fecha_alta = $fecha_alta;
    }

    function setLeja($leja) {
        $this->leja = $leja;
    }

    function setFecha_borrado($fecha_borrado) {
        $this->fecha_borrado = $fecha_borrado;
    }

    function setEstanteria($estanteria) {
        $this->estanteria = $estanteria;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function getNueva_estanteria() {
        return $this->nueva_estanteria;
    }

    function getNueva_leja() {
        return $this->nueva_leja;
    }

    function setNueva_estanteria($nueva_estanteria) {
        $this->nueva_estanteria = $nueva_estanteria;
    }

    function setNueva_leja($nueva_leja) {
        $this->nueva_leja = $nueva_leja;
    }

}

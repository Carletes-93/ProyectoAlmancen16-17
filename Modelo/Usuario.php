<?php
/**
 * Description of Usuario
 *
 * @author Carlos
 */
class Usuario {
    private $nombre;
    private $id;
    private $pass;
    
    function __construct($nombre, $pass) {
        $this->nombre = $nombre;
        $this->pass = $pass;
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getId() {
        return $this->id;
    }

    function getPass() {
        return $this->pass;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }
}

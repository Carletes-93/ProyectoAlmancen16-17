<?php
/**
 * Description of DimensionErrorException
 *
 * @author Carlos
 */
class DimensionErrorException extends Exception{
    private $valor;
    
    public function __construct($message, $code, $valor) {
        parent::__construct($message, $code, null);
        $this->valor=$valor;
    }
    
    public function __toString() {
        if($this->getCode()==1){
            return __CLASS__." - La ".$this->getMessage()." (".$this->valor.") "." no puede ser negativa.";
        }
        if($this->getCode()==2){
            return __CLASS__." - La ".$this->getMessage()." (".$this->valor.") "." no puede ser nula.";
        }
        if($this->getCode()==3){
            return __CLASS__." - La ".$this->getMessage()." (".$this->valor.") "." no puede ser superior a 50.";
        }
    }

}

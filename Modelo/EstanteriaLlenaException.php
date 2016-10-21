<?php
/**
 * Description of EstanteriaLlenaException
 *
 * @author Carlos
 */
class EstanteriaLlenaException extends Exception{
    public function __construct($message, $code) {
        parent::__construct($message, $code, null);
    }
    public function __toString() {
        return __CLASS__." - ".$this->getMessage();
    }
}

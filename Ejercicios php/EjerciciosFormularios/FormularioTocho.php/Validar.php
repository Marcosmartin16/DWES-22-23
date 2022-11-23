<?php
abstract class Validar{
    public function setX($valor){
        $this->valor=$valor;
    }

    public function getX(){
        return $this->valor;
    }

    abstract function comprobar($valor,$valor2);
    abstract function error();
}

?>
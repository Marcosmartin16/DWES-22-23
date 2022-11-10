<?php
abstract class Abstracta{
    public function setX($valor){
        $this->valor=$valor;
    }

    public function getX(){
        return $this->valor;
    }

    abstract function comprobar($valor);
}

?>
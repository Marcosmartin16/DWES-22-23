<?php
require_once('Abstracta.php');

class Numero extends Abstracta
{

    private $numero;

    function comprobar($numero){
        if(!empty($numero)){
            return true;
        }else{
            return false;
        }
    }

    /*public function setX($valor){
        $this->valor=$valor;
    }

    public function getX(){
        return $this->valor;
    }*/
}
?>
<?php

class Numero{

    private $numero;

    function comprobar($numero){
        if(!empty($numero)){
            return $this->numero = $numero;
        }else{
            return "error";
        }
    }
}
?>
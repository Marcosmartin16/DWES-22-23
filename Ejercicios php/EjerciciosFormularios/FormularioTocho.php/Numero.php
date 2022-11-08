<?php

class Numero{

    private $numero;

    function comprobar($numero){
        if(!empty($numero)){
            $this->numero = $numero;
            return true;
        }else{
            return false;
        }
    }
}
?>
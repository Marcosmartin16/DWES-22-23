<?php

class Radio{

    private $sexo = "";

    function comprobar($array){
        if(array_key_exists('sexo',$array)){
            return true;
        }else{
            return false;
        }
    }

    function setSexo($sexo){
        $this->sexo = $sexo;
    }
}
?>
<?php
require_once('Abstracta.php');

class Radio extends Abstracta{

    private $sexo = "";

    function comprobar($array){
        if(array_key_exists('sexo',$array)){
            return true;
        }else{
            return false;
        }
    }
}
?>
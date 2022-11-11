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

    function crear($array,$stringEnviado){
        
        array_walk(
            $array,
            function($op, $k, $data){
                
                if(($op == $data)){
                    echo "$op<input type='radio' name='sexo' value='$op' id='$op' checked/>&nbsp;";
                }else{
                    echo "$op<input type='radio' name='sexo' value='$op' id='$op'/>&nbsp;";
                }
            },$stringEnviado);
    }
}
?>
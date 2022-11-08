<?php

class Check{

    private $array =[];

    function crear($array){
        array_walk(
            $array,
            function($op, $k){
                echo "$op<input type='checkbox' value='$k' name='hobbies[]'/>&nbsp;";
            }
        );
    }

    function comprobar($array){
        if(array_key_exists('hobbies',$array)){
            return true;
        }else{
            return false;
        }
    }

    function setHobbies($array){
        foreach($array as $var){
            array_push($this->array, $var);
        }
    }
}
?>
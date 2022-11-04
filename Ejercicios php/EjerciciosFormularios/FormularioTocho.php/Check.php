<?php

class Check{

    private $array =[];
    private $checked = "";

    function crear($array){
        array_walk(
            $array,
            function($op, $k){
                echo "$op<input type='checkbox' value='$k' name='$op'/>&nbsp;";
            }
        );
    }

    function comprobar(){
        for ($i=0; $i < count($this->array); $i++) { 
            if($checked == $i){
                $this->checked = $checked;
            }else{
                return "error";
            }
        }
    }
}
?>
<?php
require_once('Abstracta.php');

class Check extends Abstracta{

    private $array =[];

    function comprobar($array){
        if(array_key_exists('check',$array)){
            return true;
        }else{
            return false;
        }
    }

    function crear($array,$arrayEnviado){
        if(empty($arrayEnviado)){
            array_walk(
                $array,
                function($op, $k){
                    echo "$op<input type='checkbox' value='$op' name='check[]' />&nbsp;";
                }
            );
        }else{
            array_walk(
                $array,
                function($op, $k, $data){
                    
                    if(in_array($op, $data)){
                        echo "$op<input type='checkbox' value='$op' name='check[]' checked/>&nbsp;";
                    }else{
                        echo "$op<input type='checkbox' value='$op' name='check[]'/>&nbsp;";
                    }
                },$arrayEnviado);
        }
    }
}
?>
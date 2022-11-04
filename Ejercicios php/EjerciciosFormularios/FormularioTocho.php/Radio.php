<?php

class Radio{

    private $radio = "";

    function comprobar($radio){
        if($radio != ""){
            return $this->radio = $radio;
        }else{
            return "ERROR";
        }
    }
}
?>
<?php
require_once('Validar.php');

class CheckBox extends Validar{

    private $Hobbies =["DEPORTES","LECTURA","VIDEOJUEGOS","CINE"];
    private $nombre="hobbies[]";


    function crear($arrayEnviado){
        if(empty($arrayEnviado)){
            array_walk(
                $this->Hobbies,
                function($op, $k){
                    echo "$op<input type='checkbox' value='$op' name='$this->nombre' />&nbsp;";
                }
            );
        }else{
            if($this->comprobar($arrayEnviado,substr($this->nombre,0,7))){
                array_walk(
                    $this->Hobbies,
                    function($op, $k, $data){
                        
                        if(in_array($op, $data)){
                            echo "$op<input type='checkbox' value='$op' name='$this->nombre' checked/>&nbsp;";
                        }else{
                            echo "$op<input type='checkbox' value='$op' name='$this->nombre'/>&nbsp;";
                        }
                    },$arrayEnviado[substr($this->nombre,0,7)]);
            }else{
                array_walk(
                    $this->Hobbies,
                    function($op, $k){
                        echo "$op<input type='checkbox' value='$op' name='$this->nombre' />&nbsp;";
                    }
                );
                echo "<p>".$this->error()."</p>";
            }
        }
    }

    function comprobar($array,$nombre){
        if(array_key_exists($nombre,$array)){
            return true;
        }else{
            return false;
        }
    }

    function error(){
        return"Error debe seleccionar al menos un CheckBox";
    }
}
?>
<?php
require_once('Validar.php');

class Radio extends Validar{

    private $sexo =['HOMBRE','MUJER','OTRO'];
    private $nombre="sexo";
    function getNombre(){return $this->nombre;}


    function crear($dato){
        if(empty($dato)){
            array_walk(
                $this->sexo,
                function($op, $k){
                    echo "$op<input type='radio' name='$this->nombre' value='$op'/>&nbsp;";
                });
        }else{
            if($this->comprobar($dato,$this->nombre)){
                array_walk(
                    $this->sexo,
                    function($op, $k, $data){
                        
                        if(($op == $data)){
                            echo "$op<input type='radio' name='$this->nombre' value='$op' id='$op' checked/>&nbsp;";
                        }else{
                            echo "$op<input type='radio' name='$this->nombre' value='$op' id='$op'/>&nbsp;";
                        }
                    },$dato[$this->nombre]);
            }else{
                array_walk(
                    $this->sexo,
                    function($op, $k){
                        echo "$op<input type='radio' name='$this->nombre' value='$op' id='$op'/>&nbsp;";
                    });
                    echo $this->error();
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
        return "<p>Error deben seleccionar un opcion de radio</p>";
    }
}
?>
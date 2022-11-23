<?php
require_once('Validar.php');

class Radio extends Validar{

    private $sexo =['HOMBRE','MUJER','OTRO'];
    private $nombre="sexo";

    function crear($dato){
        //si esta vacio lo pinta por defecto
        if(empty($dato)){
            array_walk(
                $this->sexo,
                function($op, $k){
                    echo "$op<input type='radio' name='$this->nombre' value='$op'/>&nbsp;";
                });
        }else{
            //si esta lleno lo comprueba y marca el checked
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
            //si no lo vuelve a pintar por defecto e imprime el error
            }else{
                array_walk(
                    $this->sexo,
                    function($op, $k){
                        echo "$op<input type='radio' name='$this->nombre' value='$op' id='$op'/>&nbsp;";
                    });
                echo "<p>".$this->error()."</p>";
            }

        }
    }

    //comprueba si el post existe es decir si se ha enviado existe si no no 
    //si un radio a sido marcado se envia si no no se envia nada
    function comprobar($array,$nombre){
        if(array_key_exists($nombre,$array)){
            return true;
        }else{
            return false;
        }
    }

    function error(){
        return "Error deben seleccionar un opcion de radio";
    }
}
?>
<?php
require_once('Validar.php');

class TextArea extends Validar{

    private $nombre="Descripcion";
    function getNombre(){return $this->nombre;}

    function crear($valor){
            if(empty($valor)){
                echo "<textarea placeholder='Escribe sobre el hobbie/s seleccionados u otro que te guste' rows='5' cols='50' name='$this->nombre'></textarea>";
            }else{
                if($this->comprobar($valor,$this->nombre)){
                    echo "<textarea placeholder='Escribe sobre el hobbie/s seleccionados u otro que te guste' rows='5' cols='50' name='$this->nombre'>".$valor[$this->nombre]."</textarea>";
                }else{
                    echo "<textarea placeholder='Escribe sobre el hobbie/s seleccionados u otro que te guste' rows='5' cols='50' name='$this->nombre'></textarea>";
                    echo $this->error();
                }
            }
        
    }

    function comprobar($valor,$nombre){
        if(array_key_exists($nombre,$valor) && !empty($valor[$nombre])){
            return true;
        }else{
            return false;
        }
    }

    function error(){
        return "<p>Error deben escribir algo sobre tu hobbies u otros</p>";
    }
}
?>
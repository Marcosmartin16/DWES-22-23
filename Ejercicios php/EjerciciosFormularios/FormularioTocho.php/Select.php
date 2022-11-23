<?php
require_once('Validar.php');

class Select extends Validar{

    private $Provincia = [" ","MADRID","BARCELONA","VALENCIA","MURCIA","SEVILLA"];
    private $nombre="Provincia";

    function crear($valor){
            if(empty($valor)){
                echo"<select name='$this->nombre' id='$this->nombre'>";
                    array_walk(
                        $this->Provincia,function($op,$k){
                            echo"<option value='$op'>$op</option>";
                    });
                    echo"</select>";
            }else{
                if($this->comprobar($valor,$this->nombre)){
                    array_shift($this->Provincia);
                    echo"<select name='$this->nombre' id='$this->nombre'>";
                        array_walk($this->Provincia,function($op,$k,$seleccionado){
                            if($seleccionado!=$op){
                                echo "<option value='$op'>$op</option>";
                            }else{
                                echo "<option value='$op' selected>$op</option>";
                            }
                        },$valor);
                    echo"</select>";
                }else{
                    echo"<select name='$this->nombre' id='$this->nombre'>";
                    array_walk($this->Provincia,function($op,$k){
                        print("<option value='$op'>$op</option>");
                    });
                    echo"</select>";
                    echo "<p>".$this->error()."</p>";
                }
            }
    }

    function comprobar($valor,$nombre){
        if(array_key_exists($nombre,$valor) && $valor[$nombre] != " "){
            return true;
        }else{
            return false;
        }
    }

    function error(){
        return "Error deben Seleccionar un opcion";
    }
}
?>
<?php

require('Usuario.php');

Class UsuarioA extends Usuario{

    function crearPartido(){
        echo "Partido creado por [Admin]<br>";
    }

    function introducirResultado($resultado){
        if($resultado == "victoria"){
            $this->puntos += 1;
            echo $this->nombre . " Ha ganado el partido <br>";
            if($this->puntos == 3){
                $this->puntos = 0;
                $this->nivel = $this->nivel + 1;
                echo $this->nombre . " Ha ascendido al nivel " . $this->nivel . " Nivel anterior " . $this->nivel-1 . "<br>";
            }
        }else if($resultado == "derrota"){
            $this->puntos -= 1;
            echo $this->nombre . " Ha perdido el partido <br>";
        }else{
            $this->puntos = $this->puntos;
            echo $this->nombre . " Ha empatado el partido <br>";
        }
    }

    function imprimirInfo(){
        echo "[ADMIN]";
        parent::imprimirInfo();
    }
}

?>
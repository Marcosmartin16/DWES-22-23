<?php

class Usuario{

    private $nombre;
    private $apellidos;
    private $deporte;
    private $nivel = 0;
    private $puntos = 0;

    function setNombre($nombre){$this->nombre = $nombre;}
    function getNombre(){return $this->nombre;}

    function setApellido($apellido){$this->apellido = $apellido;}
    function getApellido(){return $this->apellido;}

    function setDeporte($deporte){$this->deporte = $deporte;}
    function getDeporte(){return $this->deporte;}

    function introducirResultado($resultado){
        if($resultado == "victoria"){
            $this->puntos += 1;
            echo $this->nombre . " Ha ganado el partido <br>";
            if($this->puntos == 6){
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
        echo $this->nombre . " Puntos totales: " . $this->puntos . " Se encuentra en el nivel: " . $this->nivel;
    }
}
?>
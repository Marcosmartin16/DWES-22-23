<?php
//define("SUBIDA", 6);
class Usuario{

    private $nombre;
    private $apellidos;
    private $deporte;
    private $nivel = 0;
    private $puntos = 0;
    private $seis; 

    public function __construct(string $nombre, string $apellido, string $deporte, int $seis = 6){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->deporte = $deporte;
        $this->seis = $seis;
    }
    
    function introducirResultado($resultado){
        if($resultado == "victoria"){
            $this->puntos += 1;
            echo $this->nombre . " Ha ganado el partido <br>";
            if($this->puntos == $this->seis){
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
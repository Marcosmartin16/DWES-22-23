<?php

//require('Usuario.php');

class UsuarioA extends Usuario{

    public function __construct(string $nombre, string $apellido, string $deporte){
        parent:: __construct($nombre .= "[ADMIN]", $apellido, $deporte){
            $this->seis = 3
        };
    }

    function crearPartido(){
        echo "Partido creado por [Admin]<br>";
    }

    function introducirResultado($resultado){
       parent::introducirResultado($resultado);
    }

    function imprimirInfo(){
        echo "[ADMIN]";
        parent::imprimirInfo();
    }
}

?>
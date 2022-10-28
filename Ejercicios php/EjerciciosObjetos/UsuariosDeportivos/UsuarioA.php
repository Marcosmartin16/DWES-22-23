<?php

require_once('Usuario.php');

class UsuarioA extends Usuario{

    function __construct(string $nombre, string $apellido, string $deporte, $seis = 3){
        parent:: __construct($nombre .= ' [ADMIN] ', $apellido, $deporte, $seis);
    }

    function crearPartido(){
        echo "Partido creado por " . $this->nombre . "<br>";
    }

    function introducirResultado($resultado){
       parent::introducirResultado($resultado);
    }

    function imprimirInfo(){
        parent::imprimirInfo();
    }
}

?>
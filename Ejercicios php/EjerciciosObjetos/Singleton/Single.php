<?php

class Single{

    public $nombre;

    private static $instancia;

    public static function singleton(){
        if(!isset(self::$instancia)){
            self::$instancia = new Single();
        }

        return self::$instancia;
    }

    private function __construct(){}

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function getNombre(){
        return $this->nombre;
    }
}

$single = Single::singleton();
$single2 = Single::singleton();

$single->setNombre("Marcos");
?>
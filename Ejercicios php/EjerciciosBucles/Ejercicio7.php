<?php
    function concatenar (string $separador, string ...$cadenas): string
    {
        $salida = "";
        $primero = true;
        foreach($cadenas as $cadena)
        {
            if($primero){
                $primero = false;
                $salida = $cadena;
            }else{
                $salida .= $separador.$cadena;
            }
        }
    }

    function concatenar2 (string $separador, string ...$cadenas): string
    {
        return implode($separador, $cadenas);
    }

    echo concatenar(" ", "Hola", "mundo", "!"); // Hola mundo !
    echo concatenar(".", "Esto", "son", "varias", "cadenas", "puntos"); //Esto.son.varias.cadenas.puntos

    echo concatenar2(" ", "Hola", "mundo", "!"); // Hola mundo !
    echo concatenar2(".", "Esto", "son", "varias", "cadenas", "puntos"); //Esto.son.varias.cadenas.puntos
?>
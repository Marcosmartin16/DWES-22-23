<?php

    $cadena = "cadena";
    $letra = "";
    
    while($letra != "a"){
        $letra = substr($cadena,1);
        echo "<h4>$letra</h4>";
    }
    
?>
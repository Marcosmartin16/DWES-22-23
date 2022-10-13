<?php

    $cadena = "cadena";

    for($i = 0; $i <= strlen($cadena); $i++){
        $letra = substr($cadena,$i,1);
        echo "<h4>$letra</h4>";
    }

?>
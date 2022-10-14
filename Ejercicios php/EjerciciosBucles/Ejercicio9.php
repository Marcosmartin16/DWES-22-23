<?php 

    $uno = 10;
    $dos = "dos";

    function intercambio($a, $b){
        
        $temp = $a;
        $a = $b;
        $b = $temp;

        return $a . " " . $b;
    }

    echo intercambio($uno, $dos);
?>
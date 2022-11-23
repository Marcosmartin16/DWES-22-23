<?php 

$array = [2, true, "HOLA", "adios", false, 3, [2]];
print_r($array);
echo "<br>";

function cambios($clave){
    
    $contador +1;
    if(gettype($clave) == "integer"){
        $numero = $clave ** $contador +1;

        return $numero;
    }else{
        return $clave;
    }

    if(gettype($clave) == "double"){
        if($clave == true) {
            $clave = false;
            return $clave;
        }else{
            $clave = $clave -1;
            return $clave;
        }
    }

    if(gettype($clave) == "string"){
        $clave = strtolower($clave) ^ strtoupper($clave) ^ $clave;
    }
}

function transformer($a){

    $arrayF = array_map("cambios", $a);

    return $arrayF;
}

print_r(transformer($array));
echo "<br>" . $contador;
?>
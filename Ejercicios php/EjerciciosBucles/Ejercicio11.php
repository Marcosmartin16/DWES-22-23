<?php 

$array = [2, true, "HOLA", "adios", false, 3, [2]];
$contador = 1;
print_r($array);
echo "<br>";

function cambios($clave){
    
    if(gettype($clave) == "integer"){
        $numero = pow($clave, 2);

        return $numero;
    }else{
        return $clave;
    }

    if(gettype($clave) == "double"){
        if($clave != true) {
            $clave = true;
        }else{
            $clave = false;
        }
        return $clave;
    }else{
        return $clave;
    }

    if(gettype($clave) == "string"){
        if($clave == strtoupper($clave)){
            $clave = strtolower($clave);
            

            return $clave;
        }else{
            $clave = strtoupper($clave);
           

            return $clave;
        }
    }else{
        return $clave;
    }
}

function transformer($a){

    $arrayF = array_map("cambios", $a);

    return $arrayF;
}

print_r(transformer($array));
echo "<br>" . $contador;


?>
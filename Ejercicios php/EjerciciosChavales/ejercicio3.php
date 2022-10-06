<?php
   /*set_time_limit(0); 
    $hash = "$2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72";
    
    for($i = "a"; $i <= "z"; $i++){
        for($j = "a"; $j <= "z"; $j++){
            for($z = "a"; $z <= "z"; $z++){
                for($x = "a"; $x <= "z"; $x++){
                    $perfe = password_hash("$i + $j + $z + $x", PASSWORD_DEFAULT);
                    if($perfe == $hash){
                        echo $perfe;
                    }
                }
            }
        }
    }*/

    $usuarios = [
        "jorge" => "1234",
	    "amparo" => "admin",
	    "mary" => "",
    ];

    echo "array contras sin ocultar <br> \n";

    array_walk($usuarios,function($element,$clave){
        echo "$clave . $element <br> \n";
    });

    function cambio ($clave){
        return password_hash("$clave", PASSWORD_DEFAULT);
    }

    function relleno ($clave){
        if($clave == ""){
            return $usuarios[$clave] = "tmp2022";
        }else{
            return $usuarios[$clave] = $clave;
        }
    }

    echo "<br> array todo contras <br>";

    $array_relleno = array_map("relleno", $usuarios);

    print_r($array_relleno);

    echo "<br> \n";

    $array_oculto = array_map("cambio", $array_relleno);

    echo "<br> array oculto <br> \n";

    print_r($array_oculto);

    $array_final = array_replace($array_relleno,$array_oculto);

    echo "<br><br> array final <br> \n";

    print_r($array_final);
    
?>
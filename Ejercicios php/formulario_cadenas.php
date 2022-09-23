<?php
    $cadena = "";
    $capicua = "";
    $error = false;
    $envio = true;

    if(isset($_GET['cadena'])){
        $cadena = $_GET['cadena'];
        if($cadena == ""){
            $cadena = "";
            $error = true;
            $envio = false;
        }
   }else {
        $cadena = "";
   }


   function capicua($cadena){

        if($cadena == ""){
            return "";
        }

        if($cadena == strrev($cadena)){
           return "es capicua";
        }else{
            return "no es capicua";
        }
   }

   function vocales($cadena){
        $vocales = 0;
        for($i = 0; $i <= strlen($cadena)-1; $i++){
            $letraV = substr($cadena,$i,1);
            if($letraV == "a" || $letraV == "e" || $letraV == "i" || $letraV == "o"|| $letraV == "u" ){
                $vocales++;
            }
        }
        return $vocales;
   }

   function consonantes($cadena){
        $consonante = 0;
        for($j = 0; $j <= strlen($cadena)-1; $j++){
            $letraC = substr($cadena,$j,1);
            if($letraC != "a" && $letraC != "e" && $letraC != "i" && $letraC != "o" && $letraC != "u"){
                $consonante++;
            }
        }
        return $consonante;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <h1>Introduce una cadena</h1>

    <?php if($error) { ?>
        <h3>introduce la cadena</h3>
    <?php } ?>

    <div>
        <form action="formulario_cadenas.php" method="get">
            Cadena: <input type="text"  name="cadena" id="" value=<?=$cadena?>><br>
            <input type="submit" value="enviar">
        </form>
    </div>
    <div>
        <ul>
            <li>La cadena: <?= $cadena ?> <?= (capicua($cadena))?> </li>
            <li>Numero de vocales: <?= $cadena ?> <?= (vocales($cadena))?> </li>
            <li>Numero de consonantes: <?= $cadena ?> <?= (consonantes($cadena))?> </li>
        </ul>
    </div>
</body>
</html>
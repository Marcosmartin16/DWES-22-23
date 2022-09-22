<?php
    $cadena = "";
    $error = false;
    $capicua = "";

    if(isset($_GET['cadena'])){
        $cadena = $_GET['cadena'];
        if($cadena == ""){
            $cadena = "";
            $error = true;
        }
   }else {
        $cadena = "";
   }


   function capicua($cadena){

        if($cadena == ""){
            return $cadena = "";
        }

        if($cadena == strrev($cadena)){
           return $capicua = "es capicua";
        }else{
            return $capicua = "no es capicua";
        }
    
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
        <h3>mete una cadena</h3>
    <?php } ?>

    <div>
        <form action="formulario_cadenas.php" method="get">
            Cadena: <input type="text"  name="cadena" id="" value=<?=$cadena?>><br>
            <input type="submit" value="enviar">
        </form>
    </div>

    <div>
        <p>La cadena: <?= $cadena ?> <?= (capicua($cadena))?> </p>

    </div>
</body>
</html>
<?php 

$tablero = [];

function inicializarTablero($tablero, $m, $n){
    for($i = 1; $i < $m; $i++){
        for($j = 1; $j < $n; $j++){
            $DesdeLetra = "a";
            $DesdeLetra = "z";
            $letraAleatoria = chr(rand(ord($DesdeLetra), ord($HastaLetra)));
            array_push($tablero, $letraAleatoria);
        }
    }
    print_r($tablero);
}

function pintarTablero($palabra){
    $chars = strlen($palabra);
    for($i = 1; $i <= $chars; $i++){
        echo "<td>letra" . $i . "<td>";
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
    <table border = "1">
        <tr>
            <?php inicializarTablero($tablero,3,3)?>
        </tr>
    </table>
</body>
</html>
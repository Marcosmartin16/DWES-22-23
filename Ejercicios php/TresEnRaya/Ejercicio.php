<?php

$tablero = [
   0 => [0 =>"&nbsp", 1 =>"pos1", 2 => "pos2", 3=> "pos3"],
   1 => [0 =>"pos1", 1 =>"&nbsp", 2 => "&nbsp", 3=> "&nbsp"],
   2 => [0 =>"pos2", 1 =>"&nbsp", 2 => "&nbsp", 3=> "&nbsp"],
   3 => [0 =>"pos3", 1 =>"&nbsp", 2 => "&nbsp", 3=> "&nbsp"]
];

file_put_contents(
    "TABLERO.csv",
    $tablero."\n",
   );

if(isset($_POST['enviar'])){
    
    //si se ha introducido el tema y no es un espacio en blanco si no se cumple se introduce un error en el array de errores con el valor tema
    if((isset($_POST['posX']) && $_POST['posX'] != "") && isset($_POST['posY']) && $_POST['posY'] != ""){
        $posX = $_POST['posX'];
        $posY = $_POST['posY'];
    }else{
        $errores['posX'] = 'No puede estar vacio';
        $errores['posY'] = 'No puede estar vacio';
    }

    if(isset($_POST['turno']) && $_POST['turno'] != ""){
        $turno = $_POST['turno'];
    }else{
        $errores['turno'] = 'No puede estar vacio';
    }

    if($errores == 0){
        //actualizar array leer archivo
        //actualizar con nuevos valores
        //volver a guardar array
        $fp = fopen("TABLERO.csv","r");
        array_splice($tablero[$posX],$posY,0, $turno);
        file_put_contents(
            "TABLERO.csv",
            $_POST['posX'].";".$_POST['posY'].";".$_POST['turno']."\n",
            FILE_APPEND,
           );
    }

    print_r($_POST);
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
    <!--pintar arrays>-->
    <table border="1">
        <tr>
            <td><?=$tablero[0][0]?></td>
            <td><?=$tablero[0][1]?></td>
            <td><?=$tablero[0][2]?></td>
            <td><?=$tablero[0][3]?></td>
        </tr>
        <tr>
            <td><?=$tablero[1][0]?></td>
            <td><?=$tablero[1][1]?></td>
            <td><?=$tablero[1][2]?></td>
            <td><?=$tablero[1][3]?></td>
        </tr>
        <tr>
            <td><?=$tablero[2][0]?></td>
            <td><?=$tablero[2][1]?></td>
            <td><?=$tablero[2][2]?></td>
            <td><?=$tablero[2][3]?></td>
        </tr>
        <tr>
            <td><?=$tablero[3][0]?></td>
            <td><?=$tablero[3][1]?></td>
            <td><?=$tablero[3][2]?></td>
            <td><?=$tablero[3][3]?></td>
        </tr>
    </table><br><br>
    <!--<h1>JUGADOR GANADOR MAS LINK</h1>-->
    <form action="" method="post">
        turno: <select name="turno" id="turno">
            <option value='X'>X</option>
            <option value='O'>O</option>
        </select><br>
        <label for ="tema">X: </label>
        <input type="number"  name="posX" id="posX" value="" max="3" min="1"><br>
        <label for ="tema">Y: </label>
        <input type="number"  name="posY" id="posY" value="" max="3" min="1"><br><br>

        <input type="submit" value="JUGAR" name="enviar">
    </form>
</body>
</html>
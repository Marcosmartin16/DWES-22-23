<?php

    $horario = [
        1 => [1 => "DWEC", "DWEC","DWEC","RECREO","EIE","EIE","IT"],
        2 => [1 => "IT", 2 => "DAW", 3 => "DAW", 4 => "RECREO", 5 => "DIW", 6 => "DIW", 7 => "DIW"],
        3 => [1 => "DIW", 2 => "DIW", 3 => "DIW", 4 => "RECREO", 5 => "DWES", 6 => "DWES", 7 => "DWES"],
        4 => [1 => "EIE", 2 => "DAW", 3 => "DAW", 4 => "RECREO", 5 => "DWES", 6 => "DWES", 7 => "DWES"],
        5 => [1 => "DWES", 2 => "DWES", 3 => "DWES", 4 => "RECREO", 5 => "DWEC", 6 => "DWEC", 7 => "DWEC"],
    ];

    /*$horario = [
        0 => [0 => "HORAS", 1 => "LUNES", 2 => "MARTES", 3 => "MIERCOLES", 4 => "JUEVES", 5 => "VIERNES"],
        1 => [0 => "16:00-16:55", 1 => "DWEC", 2 => "IT", 3 => "DIW", 4 => "EIE", 5 => "DWES"],
        2 => [0 => "16:55-17:50", 1 => "DWEC", 2 => "DAW", 3 => "DIW", 4 => "DAW", 5 => "DWES"],
        3 => [0 => "17:50-18:45", 1 => "DWEC", 2 => "DAW", 3 => "DIW", 4 => "DAW", 5 => "DWES"],
        4 => [0 => "18:45-19:10", 1 => "RECREO", 2=> "RECREO", 3 => "RECREO", 4 => "RECREO", 5 => "RECREO"],
        5 => [0 => "19:10-20:05", 1 => "EIE", 2 => "DIW", 3 => "DWES", 4 => "DWES", 5 => "DWEC"],
        6 => [0 => "20:05-21:00", 1 => "EIE", 2 => "DIW", 3 => "DWES", 4 => "DWES", 5 => "DWEC"],
        7 => [0 => "21:00-21:55", 1 => "IT", 2 => "DIW", 3 => "DWES", 4 => "DWES", 5 => "DWEC"],
    ];*/
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
    <table border= "5">
        <?php for($i = 1; $i <= 7; $i++){?>
            <tr>
                <?php for($j = 1; $j <= 5; $j++){?>
                    <td><?= $dia = $horario[$j][$i]?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
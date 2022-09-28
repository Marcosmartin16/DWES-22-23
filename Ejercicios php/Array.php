<?php

    $horario = [
        1 => [1 => "DWEC", 2 => "DWEC", 3 => "DWEC", 4 => "RECREO", 5 => "EIE", 6 => "EIE", 7 => "IT"],
        2 => [1 => "IT", 2 => "DAW", 3 => "DAW", 4 => "RECREO", 5 => "DIW", 6 => "DIW", 7 => "DIW"],
        3 => [1 => "DIW", 2 => "DIW", 3 => "DIW", 4 => "RECREO", 5 => "DWES", 6 => "DWES", 7 => "DWES"],
        4 => [1 => "EIE", 2 => "DAW", 3 => "DAW", 4 => "RECREO", 5 => "DWES", 6 => "DWES", 7 => "DWES"],
        5 => [1 => "DWES", 2 => "DWES", 3 => "DWES", 4 => "RECREO", 5 => "DWEC", 6 => "DWEC", 7 => "DWEC"],
    ];
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
    <table>
            <?php for($i = 1; $i <= 5; $i++){?>
                <tr>
                    <?php for($j = 1; $j <= 7; $j++){?>
                        
                        <td>
                            <?= $dia = $horario[$i][$j]?>
                    </td>
                        
                    <?php } ?>
                </tr>
            <?php } ?>
            
    </table>
    <br>
</body>
</html>
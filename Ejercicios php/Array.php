<?php

    /*$horario = [
        1 => [1 => "DWEC", "DWEC","DWEC","RECREO","EIE","EIE","IT"],
        2 => [1 => "IT", 2 => "DAW", 3 => "DAW", 4 => "RECREO", 5 => "DIW", 6 => "DIW", 7 => "DIW"],
        3 => [1 => "DIW", 2 => "DIW", 3 => "DIW", 4 => "RECREO", 5 => "DWES", 6 => "DWES", 7 => "DWES"],
        4 => [1 => "EIE", 2 => "DAW", 3 => "DAW", 4 => "RECREO", 5 => "DWES", 6 => "DWES", 7 => "DWES"],
        5 => [1 => "DWES", 2 => "DWES", 3 => "DWES", 4 => "RECREO", 5 => "DWEC", 6 => "DWEC", 7 => "DWEC"],
    ];*/

    $horario = [
        0 => [0 => "HORAS", 1 => "LUNES", 2 => "MARTES", 3 => "MIERCOLES", 4 => "JUEVES", 5 => "VIERNES"],
        1 => [0 => "16:00-16:55", 1 => "DWEC", 2 => "IT", 3 => "DIW", 4 => "EIE", 5 => "DWES"],
        2 => [0 => "16:55-17:50", 1 => "DWEC", 2 => "DAW", 3 => "DIW", 4 => "DAW", 5 => "DWES"],
        3 => [0 => "17:50-18:45", 1 => "DWEC", 2 => "DAW", 3 => "DIW", 4 => "DAW", 5 => "DWES"],
        4 => [0 => "18:45-19:10", 1 => "RECREO", 2=> "RECREO", 3 => "RECREO", 4 => "RECREO", 5 => "RECREO"],
        5 => [0 => "19:10-20:05", 1 => "EIE", 2 => "DIW", 3 => "DWES", 4 => "DWES", 5 => "DWEC"],
        6 => [0 => "20:05-21:00", 1 => "EIE", 2 => "DIW", 3 => "DWES", 4 => "DWES", 5 => "DWEC"],
        7 => [0 => "21:00-21:55", 1 => "IT", 2 => "DIW", 3 => "DWES", 4 => "DWES", 5 => "DWEC"],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            text-align: center;
        }

        #DWEC{
            background-color: aqua;
        }

        #EIE{
            background-color: aqua;
        }

        #IT{
            background-color: aqua;
        }

        #DAW{
            background-color: aqua;
        }

        #DIW{
            background-color: aqua;
        }

        #DWES{
            background-color: aqua;
        }

        #RECREO{
            background-color: aqua;
        }

    </style>
</head>
<body>
    <table border= "5">
        <?php for($i = 0; $i <= 7; $i++){?>
            <tr>
                <?php for($j = 0; $j <= 5; $j++){
                    $asignatura = "";
                    switch($horario[$i][$j]){
                        case "DWEC":
                            $asignatura == "DWEC";
                            break;
                        case "EIE":
                            $asignatura == "EIE";
                            break;
                        case "IT":
                            $asignatura == "IT";
                            break;
                        case "DAW":
                            $asignatura == "DAW";
                            break;
                        case "DIW":
                            $asignatura == "DIW";
                            break;
                        case "DWES":
                            $asignatura == "DWES";
                            break;
                        case "RECREO":
                            $asignatura == "RECREO";
                            break;
                        default:
                            
                            break;
                    }?>

                    <?php if($horario[$i][$j] != $horario[$i-1][$j] && $horario[$i][$j] != $horario[$i+1][$j]){
                        if($horario[$i][$j] == $horario[$i][$j+4]){?><!--recreo-->
                            
                            <td colspan = "5" id = "<? $asignatura?>"  ><?= $dia = $horario[$i][$j]?></td>
                        
                        <?php }if($horario[$i][$j] != $horario[$i][$j+1] && $horario[$i][$j] != $horario[$i][$j-1]){ ?><!--asignaturas 1 hora -->
                            
                            <td id = "<?=  $asignatura?>"><?= $dia = $horario[$i][$j]?></td>

                        <?php }
                    }else{ 
                        if($horario[$i][$j] == $horario[$i+1][$j] && $horario[$i][$j] == $horario[$i+2][$j]){ ?><!--asignaturas 3 horas -->
                            
                            <td rowspan = "3" id = "<?=  $asignatura?>"><?= $dia = $horario[$i][$j]?></td>
                        
                        <?php }if($horario[$i][$j] == $horario[$i+1][$j] && $horario[$i][$j] != $horario[$i+2][$j] && $horario[$i][$j] != $horario[$i-1][$j] ){ ?><!--asignatura 2 horas -->
                            
                            <td rowspan = "2" id = "<?=  $asignatura?>"><?= $dia = $horario[$i][$j]?></td>
                        
                        <?php } 
                    }
                } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
<?php
$data = file_get_contents("temas.csv");

$lines = explode("\n", $data);
print_r($lines);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }        
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>tema</th>
                <th>hora</th>
                <th>minuto</th>            
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($lines as $line){
                    echo "<tr>";
                    $fields = explode(";", $line);
                    echo "<td>$fields[0]</td>";
                    echo "<td>$fields[1]</td>";
                    echo "<td>$fields[2]</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <a href="Formulario1.php">Añade otro</a>
</body>
</html>
<?php
include 'Menu.php';

session_start();

if (isset($_SESSION['background']) && isset($_SESSION['font']) && isset($_SESSION['name'])) {
    $background = $_SESSION['background'];
    $font = $_SESSION['font'];
    $name = $_SESSION['name'];
} else {
    $background = "";
    $font = "";
    $name = "";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #footer {
            background-color: <?= $background ?>;
            color: <?= $font ?>;
        }

        #index,
        #pagina1 {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>PAGINA 1</h1>
    <br>
    <h3>ESTO SE HACE ASI CON SESIONES</h3>
    <br>
    <?php pintar($_SESSION) ?>
</body>
</html>
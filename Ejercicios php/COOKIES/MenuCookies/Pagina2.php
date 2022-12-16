<?php
    include 'Menu.php';

    if(isset($_COOKIE['background']) && isset($_COOKIE['font']) && isset($_COOKIE['name'])){
        $background = $_COOKIE['background'];
        $font = $_COOKIE['font'];
        $name = $_COOKIE['name'];
    }else{
        $background = "";
        $font = "";
        $name = "anonimo";
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
        #footer{
            background-color: <?= $background ?>;
            color: <?= $font ?>;
        }

        #config , #pagina1{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>PAGINA 2</h1>
    <br>
    <h3>ESTO SE HACE CON SESIONES NO ASI</h3>
    <br>
    <?php pintar($_COOKIE)?>
</body>
</html>
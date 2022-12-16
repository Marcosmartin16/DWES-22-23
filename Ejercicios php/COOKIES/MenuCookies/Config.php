<?php
    include 'Menu.php';
    if(isset($_POST['enviar'])){
        
        setcookie("background",$_POST['background']);
        setcookie("font",$_POST['font']);
        setcookie("name",$_POST['name']);

        header("Location: Pagina1.php");
        die();
    }

    if(isset($_COOKIE['background']) && isset($_COOKIE['font']) && isset($_COOKIE['name'])){
        $background = $_COOKIE['background'];
        $font = $_COOKIE['font'];
        $name = $_COOKIE['name'];
    }else{
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
        #footer{
            background-color: <?= $background ?>;
            color: <?= $font ?>;
        }

        #pagina1 , #pagina2{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>CONFIG</h1>
    <br>
    <div id="text">
        <form method="post">
            BACKGOUND-COLOR: <input type="color" name="background" id="background" value="<?= $background ?>"><br>
            FONT-COLOR: <input type="color" name="font" id="font" value="<?= $font ?>"><br>
            NAME: <input type="text" name="name" id="name" value="<?= $name?>"><br>
            <input type='submit' value='Enviar' name='enviar'/><br>
        </form>
    </div><br>
    <?php pintar($_COOKIE)?>
</body>
</html>
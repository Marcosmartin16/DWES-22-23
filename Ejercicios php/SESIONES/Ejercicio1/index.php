<?php
    include 'Menu.php';

    session_start();

    if(isset($_POST['enviar'])){

        $background = $_POST['background'];
        $font = $_POST['font'];
        $name = $_POST['name'];

        $_SESSION['background'] = $background;
        $_SESSION['font'] = $font;
        $_SESSION['name'] = $name;
    }
    
    if(isset($_SESSION['background']) && isset($_SESSION['font']) && isset($_SESSION['name'])){
        $background = $_SESSION['background'];
        $font = $_SESSION['font'];
        $name = $_SESSION['name'];
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
    <h1>INDEX</h1>
    <br>
    <div id="text">
        <form method="post">
            BACKGOUND-COLOR: <input type="color" name="background" id="background" value="<?= $background ?>"><br>
            FONT-COLOR: <input type="color" name="font" id="font" value="<?= $font ?>"><br>
            NAME: <input type="text" name="name" id="name" value="<?= $name?>"><br>
            <input type='submit' value='Enviar' name='enviar'/><br>
        </form>
    </div><br>
    <?php pintar($_SESSION)?>
</body>
</html>
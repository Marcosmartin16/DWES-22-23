<?php
    function pintar($galleta){
        if(isset($galleta['name'])){
            echo "<div id='footer'>
                    <a href='Pagina1.php' id='pagina1'>pagina 1</a>
                    <a href='Pagina2.php' id='pagina2'>pagina 2</a>
                    <a href='Config.php' id='config'>config</a>
                    <a>" . $galleta['name'] . "</a>
                </div>";
        }else{
            echo "<div id='footer'>
                    <a href='Pagina1.php' id='pagina1'>pagina 1</a>
                    <a href='Pagina2.php' id='pagina2'>pagina 2</a>
                    <a href='Config.php' id='config'>config</a>
                    <a>anonimo</a>
                </div>";
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
    
</body>
</html>
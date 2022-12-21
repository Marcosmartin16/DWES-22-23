<?php
    function pintar($sesion){
        if(isset($sesion['name'])){
            echo "<div id='footer'>
                    <a href='Pagina1.php' id='pagina1'>pagina 1</a>
                    <a href='Pagina2.php' id='pagina2'>pagina 2</a>
                    <a href='index.php' id='index'>index</a>
                    <a>" . $sesion['name'] . "</a>
                </div>";
        }else{
            echo "<div id='footer'>
                    <a href='Pagina1.php' id='pagina1'>pagina 1</a>
                    <a href='Pagina2.php' id='pagina2'>pagina 2</a>
                    <a href='index.php' id='index'>index</a>
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
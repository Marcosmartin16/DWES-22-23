<?php

if(isset($_COOKIE['galleta'])){
    
    echo "<h1>Hola disfruta de tu galleta</h1>
            <a href='index.php'>volver</a>";
}else{
    header("Location: index.php");
    die();
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
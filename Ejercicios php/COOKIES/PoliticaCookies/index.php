<?php

echo "<h1>BIENVENIDO</h1>";

if(isset($_COOKIE['galleta'])){
    
    echo "<a href='Configurada.php'>entrar</a><br><br>";
}else{
    echo "
         <p>ACEPTAS LAS COOKIES?</p>
         <form method='post'>
            <input type='submit' value='aceptar' name='aceptar'/>
            <input type='submit' value='denegar' name='denegar'/>
         </form>";
}

if(isset($_POST['aceptar'])){

    setcookie("galleta","aceptada");
    header("Location: Configurada.php");
    die();
}

if(isset($_POST['denegar'])){

    echo "<p>Debes aceptar las cookies porque si no las aceptas no las has aceptado y no las aceptaste sabes entonces debes darle a aceptar las cookies</p>";
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
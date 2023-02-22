<?php

require_once('./../src/init.php');

if(isset($_SESSION['username']) && $_SESSION['username'] != ""){

    header("Location: index.php");
    die();
}

if(isset($_POST['logIn'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username != "" && $password != ""){

        $DB->ejecuta("SELECT * FROM usuarios WHERE nombre = ?", $username);
        $datos = $DB->obtenDatos();

        if(password_verify($password, $datos[0]['passwd'])){
            $_SESSION['username'] = $username;

            header("Location: index.php");
            die();
        }else{
            echo "WRONG PASSWORD OR USERNAME";
        }
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
    <form method="post">
        <input type="text" name="username" id="username">
        <input type="password" name="password" id="password">
        <input type="submit" value="Log in" name="logIn">
    </form>
</body>
</html>
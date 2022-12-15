<?php

    spl_autoload_register(function ($class) {
        $classPath = "./";
        require("$classPath${class}.php");
    });

    $email = new Texto();
    $username = new Texto();
    $password = new Texto();

    if(isset($_POST['login'])){


    }

    if(isset($_POST['signUp'])){

        try {
            $mbd = new PDO('mysql:host=localhost;dbname=examen', "examen", "examen");
        
            // Utilizar la conexión aquí
            $resultado = $mbd->prepare('SELECT * FROM Usuarios WHERE email = ":email"');
        
            $resultado->bindParam(':email', $_POST["email"]);
        
            $resultado->setFetchMode(PDO::FETCH_ASSOC);
        
            $count = $resultado->rowCount();

            $resultado->execute();        
        
            // Ya se ha terminado; se cierra
            $resultado = null;
            $mbd = null;
        
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "\n";
            die();
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
    <style>
        #login {
            margin-left: 350px;
            float: left;
        }

        #signUp {
            margin-right: 350px;
            float: right;
        }
    </style>
</head>
<body>
    <div id="login">
        <h1>LOGIN</h1>
        <br><br>
        <form method="post">
            <?php
            $username->crear("username", 20, 4, $_POST);
            $password->crear("password", 20, 4, $_POST);
            ?>
            <br><br>
            <input type="submit" value="Login" name="login" />
        </form>
    </div>
    <div id="signUp">
        <h1>SIGN UP</h1>
        <br><br>
        <form method="post">
            <?php
            $email->crear("email", 20, 4, $_POST);
            $username->crear("username", 20, 4, $_POST);
            $password->crear("password", 20, 4, $_POST);
            ?>
            <br>
            <input type="submit" value="Sign up" name="signUp" />
        </form>
    </div>
</body>
</html>
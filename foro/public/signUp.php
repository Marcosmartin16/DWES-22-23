<?php

require_once('./../src/init.php');

if(isset($_POST['signUp'])){
   
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password'];

    if($username != "" && $email != "" && $password != "" && $password2 != ""){
        $DB->ejecuta("SELECT * FROM usuarios WHERE nombre=? OR correo=?",$username, $email);
        $data = $DB->obtenDatos();

        if(empty($data)){

            if($password == $password2){
                $DB->ejecuta("INSERT INTO usuarios(nombre, correo, passwd) VALUES (?, ?, ?)", $username, $email,password_hash($password,PASSWORD_DEFAULT));
                $insertado = $DB->getExecuted();

                if($insertado){

                    header("Location: login.php");
                    die();
                }
            }else{
                echo "THE PASSWORDS DOESN'T MATCH";
            }
        }else{
            echo "THE USERNAME ALREADY EXISTS";
        }
    }else{
        echo "THE FIELDS CAN NOT BE EMPTY";
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
        <label>USERNAME: <input type="text" name="username" id="username" value="<?= $_POST['username']?>"></label><br>
        <label>EMAIL: <input type="text" name="email" id="email" value="<?= $_POST['email']?>"></label><br>
        <label>PASSWORD: <input type="password" name="password" id="password"></label><br>
        <label>REPEAT PASSWORD: <input type="password" name="password2" id="password2"></label><br>
        <input type="submit" value="Sign Up" name="signUp">
    </form>
</body>
</html>
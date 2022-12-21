<?php

session_start();

if(!isset($_SESSION['user'])){
    unset($_SESSION['user']);
}

unset($_SESSION['user']);
session_destroy();
header("Location: publica.php");
die();

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
<?php

try{

    $mbd = new PDO('mysql:host=localhost;dbname=examen;charset=utf8mb4', "examen", "examen");

}catch (PDOException $e){
    echo "Error";
    echo $e->getMessage();
    die();
}

?>
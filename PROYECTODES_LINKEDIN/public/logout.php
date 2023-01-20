<?php

require("../src/init.php");

if(isset($_SESSION['usuario'])){
    $_SESSION['usuario'] = "";
    unset($_SESSION['usuario']);
}

session_destroy();

setcookie("recuerdame", null);

header("Location: listado.php");
die();

?>
<?php

require("../src/init.php");

if(isset($_SESSION['nombre'])){
    $_SESSION['nombre'] = "";
    unset($_SESSION['nombre']);
}

session_destroy();

setcookie("recuerdame", null);

header("Location: listado.php");
die();

?>
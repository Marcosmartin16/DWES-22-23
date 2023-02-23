<?php

require_once('./../src/init.php');

if(isset($_SESSION['username']) && $_SESSION['username'] != ""){

    $_SESSION['username'] = "";
    unset($_SESSION['username']);
    session_destroy();

    header('Location: index.php');
    die();
}

?>
<?php

if(isset($_SESSION['username']) && $_SESSION['username'] != ""){
    
    echo "<div class='header'>
            <div class='username'>
                <h4>" . $username . "</h4>
            </div>";
    echo "<h1>BARRAS</h1>";
    echo "<h4>Log out</h4></div>";
}else{
    echo "<h1>BARRAS</h1>";
    echo "<h4>Log in</h4>";
    echo "<h4>Sign up</h4>";
}

?>


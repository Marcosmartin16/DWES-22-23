<?php

function formatFormUser(array $usuario){ ?>

    <form action = "" method = "get">
        <?php
            array_walk($usuario, function($value, $key){
                $tipo = (is_int($value)) ? 'number' : 'text'; 
                echo "<input name = '$key' value = '$value' type = '$tipo'>"; 
            });?>
    </form>
<?php } ?>
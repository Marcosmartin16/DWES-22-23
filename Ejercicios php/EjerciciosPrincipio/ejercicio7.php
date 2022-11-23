Imprima una pirámide de asteriscos, tamaño definido por una variable $n

***********************************************************************

<?php
    $n_filas = 10;
?>

<html>
    <body>
    <br>
    <?php for ($i = 1; $i <= $n_filas; $i++) { ?>
       
        <?php for ($espacios = 1; $espacios <= $n_filas - $i; $espacios++) { ?>
            <?= '&nbsp;' ?>
        <?php } ?>
        
        <?php for ($asteriscos = 1; $asteriscos <= ($i*2) - 1; $asteriscos++) { ?>
            <?= "*" ?>
        <?php } ?>

        <?='<br>' ?>
    <?php } ?>

    </body>
</html>

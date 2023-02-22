<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">

</head>
<body>
    <div class="menu">
      <?php include('menu.php')?>
    </div>
    <div class="titulo">
        <h1>Barras <?= $artista?></h1>
    </div>
    <div>
        <?php pintar($artista, $mbd) ?> 
    </div>
    <br>
    <?php if($iniciado){ ?>
        <div class="textArea">
            <form action="contenido.php?artista=<?= $artista ?>" method="post">

                <textarea placeholder='Algo que añadir?' rows='3' cols='50' name='comentario' class='texto'></textarea>";
                <input type="submit" value="enviar" name="enviar" class="btnEnvio"/>
            </form>
        </div>
    <?php }?>
</body>
</html>
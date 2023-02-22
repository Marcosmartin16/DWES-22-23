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
        <h1>Artistas</h1>
    </div>
    <div class="artistas">
        <div class="grupo1">
           <?php pintar($mbd)?>
        </div>
    </div>
    <?php if($iniciado){ ?>
        <div class="textArea">
            <form action="index.php" method="post">

                <textarea placeholder='Nuevo artista' rows='3' cols='50' name='comentario' class='texto'></textarea>";
                <input type="submit" value="enviar" name="enviar" class="btnEnvio"/>
            </form>
        </div>
    <?php }?>
</body>
</html>
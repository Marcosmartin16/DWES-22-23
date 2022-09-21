<?php 
    $hasta = 10;
    
    function esPrimo($n){
        if ($n == 0 || $n == 1){
            return true;
        }else {
            $esprimo = true;
            $c = 2;
            while($esprimo && $c <= ($n/2)){
                if($n % $c == 0)
                $esprimo = false;
            }
        }
        return $esprimo;
    }
?>
<html>
    <head> TABLAS DE MULTIPLICAR</head>
    <style>
        .esprimo{
            background-color: #FF00FF
        }
    </style>
    <body>
        <table botder = "2px">
            <thead>
                <tr>
                    <td>TABLAS</td>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i <= $hasta; $i++) { ?>
                    <tr>
                        <td> <?php echo $i ?> </td>
                        <?php if ($i == 0): ?>
                            <?php for($j = 0; $j <$hasta; $j++) { ?>
                                <td> <?php echo $j + 1 ?> </td>
                        <?php } ?>
                        <?php else: ?>
                            <?php for($j = 1; $j <= $hasta; $j++) { ?>
                                <td <?php if(esPrimo($i * $j)) echo "class = 'esprimo'"?>><?php echo $i * $j ?> </td>
                            <?php } ?>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
<?php

    $productos = [
        "naranja" => 1.2,
        "manzana" => 1.5,
        "pera" => 1.8,
        "platano" => 0.8,
        "kiwi" => 0.75,
        "macarrones" => 0.5,
        "arroz" => 0.75,
        "salchichas" => 1,
        "patatas_fritas" => 3,
        "paninis" => 1.5,
        "leche_6_uds" => 5,
        "pizza_jamon_serrano" => 2.59,
        "helado_chocolate" => 2.99
    ];

    if(isset($_GET['naranja']) && isset($_GET['manzana']) && isset($_GET['pera']) && isset($_GET['platano']) 
    && isset($_GET['kiwi']) && isset($_GET['macarrones']) && isset($_GET['arroz']) && isset($_GET['salchichas'])
    && isset($_GET['patatas']) && isset($_GET['paninis']) && isset($_GET['leche']) && isset($_GET['pizza']) 
    && isset($_GET['helado'])){
        $naranja = $_GET['naranja'];
        $manzana = $_GET['manzana'];
        $pera = $_GET['pera'];
        $platano = $_GET['platano'];
        $kiwi = $_GET['kiwi'];
        $macarrones = $_GET['macarrones'];
        $arroz = $_GET['arroz'];
        $salchichas = $_GET['salchichas'];
        $patatas = $_GET['patatas'];
        $paninis = $_GET['paninis'];
        $leche = $_GET['leche'];
        $pizza = $_GET['pizza'];
        $helado = $_GET['helado'];
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="ejercicio5.php" method="get">
            Naranja: <input type="number"  name="naranja" id="" value=<?=$naranja?>><br>
            Manzana: <input type="number"  name="manzana" id="" value=<?=$manzana?>><br>
            Pera: <input type="number"  name="pera" id="" value=<?=$pera?>><br>
            Platano: <input type="number"  name="platano" id="" value=<?=$platano?>><br>
            Kiwi: <input type="number"  name="kiwi" id="" value=<?=$kiwi?>><br>
            Macarrones: <input type="number"  name="macarrones" id="" value=<?=$macarrones?>><br>
            Arroz: <input type="number"  name="arroz" id="" value=<?=$arroz?>><br>
            Salchichas: <input type="number"  name="salchichas" id="" value=<?=$salchichas?>><br>
            Patatas: <input type="number"  name="patatas" id="" value=<?=$patatas?>><br>
            Paninis: <input type="number"  name="paninis" id="" value=<?=$paninis?>><br>
            Leche: <input type="number"  name="leche" id="" value=<?=$leche?>><br>
            Pizza: <input type="number"  name="pizza" id="" value=<?=$pizza?>><br>
            Helado: <input type="number"  name="helado" id="" value=<?=$helado?>><br>
            <input type="submit" value="enviar">
        </form>
    </div>
</body>
</html>
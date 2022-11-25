<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=examen', "examen", "examen");

    // Utilizar la conexión aquí
    $resultado = $mbd->query('SELECT nombre,num_trofeos FROM Ciclistas WHERE id = ":idCiclista"');

    $resultado->bindParam(':idCiclista', $_GET["id"]);

    $resultado->setFetchMode(PDO::FETCH_ASSOC);

    $resultado->execute();

    while($row = $resultado->fetch()){
      echo $row["nombre"] . " " . $row["num_trofeos"]. "<br>";
    }

    // Ya se ha terminado; se cierra
    $resultado = null;
    $mbd = null;

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
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

</body>
</html>
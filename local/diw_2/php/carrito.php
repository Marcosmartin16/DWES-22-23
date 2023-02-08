<?php

require("src/init.php");

echo "<a href='productosComprar.php?nombreProductos=cocteles'>menu</a><br>";

function buscarIguales($array){
    $valores = array_count_values($array);
    return $valores;
}

function mostarPedido($array){
    $pedido = $array[0]['nombreProducto'];
    $arraypedido = explode(',', $pedido);
    return buscarIguales(($arraypedido));
}

function formato($array){

    echo "<table>
            <tr><td>Producto</td><td>Cantidad</td></tr>";
            array_walk($array, function($value, $key){
                echo "<tr><td>$key</td><td>X$value</td></tr>";
            });
        echo "</table>";
}

if(isset($_COOKIE['producto'])){
    $DB->ejecuta("SELECT * FROM pedido WHERE nombre = ?", $_SESSION['nombre']);
    $datos = $DB->obtenDatos();

    if(empty($datos)){
        $DB->ejecuta(
            "INSERT INTO pedido (nombre, nombreProducto) VALUES (?,?)",
            $_SESSION['nombre'],  $_COOKIE['producto']
        );
        $insertado = $DB->getExecuted(); 
        if($insertado){
            $DB->ejecuta("SELECT * FROM pedido WHERE nombre = ?", $_SESSION['nombre']);
            $datos = $DB->obtenDatos();
            echo "nuevo pedido registrado<br>";
            $pedido = mostarPedido($datos);
            formato($pedido);
            setcookie('producto','',time() - 1); 
            echo "<form method='post'><input type='submit' value='pagar' name='pagar'></form>";
        }
    }else{
        $pedido = $datos[0]['nombreProducto'] . "," . $_COOKIE['producto'];
        $pedido;

        $DB->ejecuta(
            "UPDATE pedido SET nombreProducto = ? WHERE nombre = ?",
            $pedido, $_SESSION['nombre']
        );    

        $cambiado = $DB->getExecuted();
        if($cambiado){
            $DB->ejecuta("SELECT * FROM pedido WHERE nombre = ?", $_SESSION['nombre']);
            $datos = $DB->obtenDatos();

            
            echo "nuevo producto añadido<br>";
            $pedido = mostarPedido($datos);
            formato($pedido);
            setcookie('producto','',time() - 1); 
            echo "<form method='post'><input type='submit' value='pagar' name='pagar'></form>";
        }
    }
}else{
    $DB->ejecuta("SELECT * FROM pedido WHERE nombre = ?", $_SESSION['nombre']);
    $datos = $DB->obtenDatos();

    $pedido = mostarPedido($datos);
    formato($pedido);
    echo "<form method='post'><input type='submit' value='pagar' name='pagar'></form>";
}

if(isset($_POST['pagar'])){
    $DB->ejecuta(
        "DELETE FROM pedido WHERE nombre = ?",
        $_SESSION['nombre']
    );

    $borrado = $DB->getExecuted();

    if($borrado){
        header("Location: graciasCompra.php");
        die();
    }
}
?>
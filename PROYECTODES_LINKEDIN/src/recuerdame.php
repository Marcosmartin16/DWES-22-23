<?php

require_once("DWESBaseDatos.php");

if(isset($_COOKIE['recuerdame'])){
    
    $DB->ejecuta("SELECT u.id, u.nombre FROM usuarios u LEFT JOIN tokens t WHERE t.valor = ? AND t.expiracion > now()", $_COOKIE['recuerdame']);
    $usuario = $DB->obtenDatos();

    $_SESSION['usuario'] = $usuario[0]['nombre'];

    print_r($_SESSION);
}

?>
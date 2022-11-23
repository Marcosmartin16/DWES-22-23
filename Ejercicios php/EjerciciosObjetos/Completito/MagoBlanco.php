<?php
namespace Completito;
require_once('Mago.php');

class MagoBlanco extends Mago{
    function atacar(){
        echo "MAGO BLANCO: !ATAQUE DE LUZ¡ <br>";
    }
}
?>
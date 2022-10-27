<?php

require_once('PlataformaPago.php');

class BancoMalvado implements PlataformaPago{

    function estableceConexion():bool{
        echo "<br>conexion establecida con BancoMalvado<br>";
        return true;
    }

    public function compruebaSeguridad():bool{
        echo "todo segurisimo en BancoMalvado<br>";
        return true;
    }

    public function pagar($cuenta, $cantidad){
        $this->cuenta = $cuenta;
        $this->cantidad = $cantidad;
        echo "se ha pagado a la cuenta: " . $this->cuenta . " la cantidad de " . $this->cantidad . " mediante BancoMalvado<br>";
    }
}
?>
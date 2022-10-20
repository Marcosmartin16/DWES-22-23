<?php

    class CuentaBancaria{

        public static $numeroCuenta = 10001;
        private $nombre;
        private $saldo;

        function __construct($nombre = "anonimo",$saldo = 0){
            $this->nombre = $nombre;
            $this->saldo = $saldo;
            self::$numeroCuenta++;
        }

        function ingresar(float $cantidad){
            return $this->saldo = $this->saldo + $cantidad;
        }

        function retirar(float $cantidad){
            return $this->saldo = $this->saldo - $cantidad;
        }

        function saldo(){
            return $this->saldo;
        }

        function transferirA($cantidad, $cuentaBancaria){
            $cuentaBancaria->ingresar($cantidad);
            $this->retirar($cantidad);
        }

        function bancarrota(){
            $this->saldo = 0;
        }

        function unirCon($cuentaBancaria){
            $saldoC = $cuentaBancaria->saldo();
            $cuentaBancaria->bancarrota();
            $cuentaBancaria->$numeroCuenta == -1;
            $this->ingresar($saldoC);
        }

        function mostrar(...$c){
            echo "Numero de cuenta: " . self::$numeroCuenta . " Nombre: " . $this->nombre . " Saldo: " . $this->saldo;
        }
    }
?>
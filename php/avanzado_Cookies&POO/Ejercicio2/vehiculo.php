<?php
    class Vehiculo {
        private static $kmTotales = 0;
        private static $vehiculosCreados = 0;

        private $kmRecorridos;

        public function __construct() {
            self::$vehiculosCreados++;
            $this->kmRecorridos = 0;
        }

        public function recorre($kms) {
            $this->kmRecorridos += $kms;
            self::$kmTotales += $kms;
        }

        public static function getvehiculosCreados(){
            return self::$vehiculosCreados;
        }

        public static function getkmTotales(){
            return self::$kmTotales;
        }

        public function getkmRecorridos(){
            return $this->kmRecorridos;
        }
    }
?>
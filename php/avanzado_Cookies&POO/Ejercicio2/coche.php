<?php
include_once "vehiculo.php";

    class Coche extends Vehiculo {
        private $cilindrada;

        public function __construct($cilindradaParam) {
            parent::__construct();
            $this->cilindrada = $cilindradaParam;
        }

        public function quemaRuedas() {
            echo "Ruedasssssssssssss";
        }

        public function mostrarkmRecorridos() {
            return $this->getkmRecorridos();
        }
    }
?>
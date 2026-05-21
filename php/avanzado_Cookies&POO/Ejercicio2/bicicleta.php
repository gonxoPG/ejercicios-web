<?php
include_once "vehiculo.php";

    class Bicicleta extends Vehiculo {
        private $numMarchas;

        public function __construct($numMarchasParam) {
            parent::__construct();
            $this->numMarchas = $numMarchasParam;
        }

        public function hazCaballito() {
            echo "Cabaliiiiiiiiiiiiiiiiiitooooooooo";
        }

        public function mostrarkmRecorridos() {
            return $this->getkmRecorridos();
        }
    }
?>
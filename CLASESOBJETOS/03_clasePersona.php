<?php
    class Persona {
        protected $DPI;
        protected $nombre;
        private $edad;
        //private $clave;
        //protected $fecha_registro;
        //static $estado = 'Activo';
//Asignar
        public function __construct($vrDPI, $vrnombre, $vredad)
        {
            $this->DPI = $vrDPI;
            $this->nombre = $vrnombre;
            $this->edad = $vredad;
            //$this->fecha_registro = date("j, n, Y");
        }

        public function getDPI(){
            return $this->email;
        }

        public function getnombre(){
            return $this->nombre;
        }

        public function getedad(){
            return $this->edad;
        }

    }
?>
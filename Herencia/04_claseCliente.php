<?php
    require_once("04_claseCliente.php");

    class Cliente extends Persona {

        protected $credito;

        public function __construct($vrcedula, $vrnombre, $vredad, $vrcredito)
        {   //parent permite llevar los datos al constructor de Persona
            parent::__construct($vrcedula, $vrnombre, $vredad);
            $this->credito = $vrcredito;
        }

        public function getCredito()
        {
            return $this->credito;
        }
    }

?>
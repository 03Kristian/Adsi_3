<?php
    require_once("06_claseCliente.php");
    //
    class Usuario extends Cliente{

        private $email;
        private $password;

        function __construct(int $vrcedula,string $vrnombre,float $vrsalario, string $vremail, string $vrpassword)
        {
            parent::__construct($vrcedula, $vrnombre, $vrsalario);
            $this->email = $vremail;
            $this->password = $vrpassword;
        }

        public function getemail()
        {
            return $this->email;
        }
        public function setemail($vremail)
        {
            $this->email = $vremail;
        }
    }

?>
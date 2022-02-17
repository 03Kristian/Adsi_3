<?php

require_once("02_claseUsuario.php");

class CuentaBancaria extends Cliente{

    private $codigo;
    private $tipoC;
    private $Saldo;
    public $vr_retiro;
    //public $saldo_cuenta;

    function __construct(int $vrcedula,string $vrnombre,float $vrsalario, $vremail, $vrpassword, $vrcodigo, $vrtipoC, $vrSaldo)
        {
            parent::__construct($vrcedula, $vrnombre, $vrsalario, $vremail, $vrpassword);
            $this->codigo = $vrcodigo;
            $this->Saldo = $vrSaldo;
            $this->tipoC = $vrtipoC;
            //$this->retiro = $vrRetiro;

        }

    public function getsaldo(){
        return $this->saldo; 
    }

    public function setsaldo($vrSaldo){
        $this->Saldo= $vrSaldo;
    }
    public function setValor_retiro($vr_retiro){
        $this->retiro = $vr_retiro;
    }
    public function Retiro($vr_retiro){
        if ($this->Saldo > $vr_retiro) {
            echo "EL usuario puede realizar el retiro del monto seleccionado: ";
            $this->Saldo = $this->Saldo - $vr_retiro;
        }
        return $this->saldo;
    }
    

}
?>
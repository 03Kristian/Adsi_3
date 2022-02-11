<?php


class Cliente {
    protected $cedula;
        public $nombre;
    private $salario;
//,string $vremail,int $vredad
    function __construct(int $vrcedula,string $vrnombre,float $vrsalario){
        
        $this ->cedula=$vrcedula;
        $this ->nombre=$vrnombre;
        $this ->salario=$vrsalario;

    }
    function getcedula(){
        return $this->cedula;
    }
    function setsalario($vrsalario){
        $this->salario = $vrsalario;
    }
    
}//end


?>
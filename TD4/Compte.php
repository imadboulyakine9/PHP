<?php
Class Compte{
    private $code;
    private $solde;
    public function __construct($code, $solde){
        $this->code = $code;
        $this->solde = $solde;
    }
    public function verser($montant){
        $this->solde += $montant;
    }
    public function getCode(){
        return $this->code;
    }
    public function retirer($montant){
        $this->solde -= $montant;
    }
    public function getCompteState(){
        return "Code: ".$this->code." Solde: ".$this->solde;
    }
}
?>